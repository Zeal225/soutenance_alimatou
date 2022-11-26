
    <?php
session_start();
require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
// require_once '../connext/connOracle.php';
// require __DIR__ . '../vendor/autoload.php';

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $logger = new Logger('SimpleLogger');
// $logger->pushHandler(new StreamHandler(__DIR__.'../serverUser.log', Logger::DEBUG));

    $domain = 'ntcgrae.local';
    $username = 'adconnect';
    $password = 'Caisse77';
    $ldapconfig['host'] = '10.20.4.11';
    $ldapconfig['port'] = '389';
    $ldapconfig['basedn'] = 'dc=ntcgrae,dc=local';

    $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

    $bind=ldap_bind($ds, $username .'@' .$domain, $password);

    

    $LOG=htmlspecialchars(strtolower($_POST['login']));
    //$MDP=htmlspecialchars($_POST['pass']);

    $dn="ou=IPS-CGRAE,".$ldapconfig['basedn'];
    $isITuser = ldap_search($ds,$dn,'(&(objectClass=User)(objectCategory=person)(sAMaccountname='.$LOG.'))');

    //$read = ldap_search($ds,$ldapconfig['basedn'],$LOG);
    $info = ldap_get_entries($ds, $isITuser);

    //var_dump($info);
    
    for ($i=0; $i<$info["count"]; $i++) {
        $login = $info[$i]["samaccountname"][0];
        $nom_prenom = $info[$i]["cn"][0];
        $fonction=str_replace("'",'"',$info[$i]["description"][0]);
        $structure= str_replace("'",'"',$info[$i]["department"][0]);
        $tel= $info[$i]["telephonenumber"][0];
        $mail = $info[$i]["mail"][0];
              //$physiq = $info[$i]["physicaldeliveryofficename"][0];
        //$physiq = $info[$i]["physicaldeliveryofficename"][0];
    }

    //var_dump($info);

    // $bind = ldap_bind($ds,$info[0]["dn"]);
    // // var_dump($bind);
    // if  ( $info["count"]==0 ){
    //     header('Location:../../../Resources/login-form-20/index.php?erreur');
    // }
   
    // if ($info["count"] == 1  && $bind == FALSE){
    //     header('Location:../../../Resources/login-form-20/index.php?erreurs');
    // }
    //return $info;
//TABLE PARTICIPANT
// $nom_prenom_participant=$_POST['nom_prenom_participant'];
// $prenom_superieur=$_POST['prenom_superieur'];
// $fonction_superieur=$_POST['fonction_superieur'];
// $structure_superieur=$_POST['structure_superieur'];

    try {
        //code...
        $select = $conn->query('SELECT max(ID_SUPERIEUR) as ID_SUPERIEUR from SUPERIEUR');    
        $retour = $select->fetch();
        $id = $retour['ID_SUPERIEUR']+1;

        $conn->beginTransaction();

            $conn->exec("INSERT INTO SUPERIEUR(ID_SUPERIEUR, NOM_PRENOM_SUPERIEUR, FONCTION_SUPERIEUR, STRUCTURE_SUPERIEUR) VALUES('$id','$nom_prenom','$fonction','$structure')");
            var_dump($conn);
        $conn->commit();
//header('Location:../../../Public/Views/adhesion_ok.php');
header('location:../../../Resources/Views/parametrage.php');
    } catch  (Exception $th) {
        $conn->rollBack();
        var_dump($th);
        echo ($th->getMessage());
    }
   