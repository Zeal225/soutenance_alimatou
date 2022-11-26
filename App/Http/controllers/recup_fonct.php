<?php
function get_info_cabinet(){
 require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
$query="SELECT * FROM CABINET";
$select=$conn->prepare($query);
$select->execute();
//$result=$select->fetch();
return $select;
}


function get_info_cabinet_select(){
    require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
   $query="SELECT * FROM CABINET";
   $select=$conn->prepare($query);
   $select->execute();
   //$result=$select->fetch();
   return $select;
   }

   function get_info_formateur_select(){
    require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
   $query="SELECT * FROM FORMATEUR";
   $select=$conn->prepare($query);
   $select->execute();
   //$result=$select->fetch();
   return $select;
   }
 
//function get_info_formateur(){
  //  require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
    //$query="SELECT * FROM FORMATEUR";
    //$select=$conn->prepare($query);
    //$select->execute();
    //$result=$select->fetch();
    //return $select;
//}


function get_info_jointure_formateur_cabinet(){
    require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
    $query="SELECT  CABINET_ID_CABINET, ID_FORMATEUR, NOM_CABINET, NOM_PRENOM_FORMATEUR, TEL_FORMATEUR, FONCTION_FORMATEUR,ID_CABINET
    FROM CABINET,FORMATEUR
    WHERE CABINET_ID_CABINET=ID_CABINET" ;
    $select=$conn->prepare($query);
    $select->execute();
    //$result=$select->fetch();
    return $select;
}


function get_info_jointure_formation_formateur(){
    require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
    $query="SELECT FORMATEUR_ID_FORMATEUR, ID_FORMATION, INTITULE_FORMATION, DATE_DEBUT_FORMATION, DATE_FIN_FORMATION, HEURE_DEBUT_FORMATION, HEURE_FIN_FORMATION, LIEU_FORMATION, NOM_PRENOM_FORMATEUR, ID_FORMATEUR
    FROM FORMATEUR,FORMATION
    WHERE FORMATEUR_ID_FORMATEUR=ID_FORMATEUR" ;
    $select=$conn->prepare($query);
    $select->execute();
    //$result=$select->fetch();
    return $select;
}



// function get_info_formation(){
//     require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
//     $query="SELECT * FROM FORMATION";
//     $select=$conn->prepare($query);
//     $select->execute();
//     //$result=$select->fetch();
//     return $select;
// }


   function get_info_participation(){
        require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
        $query="SELECT * FROM PARTICIPATION";
        $select=$conn->prepare($query);
        $select->execute();
        //$result=$select->fetch();
        return $select;
    }

    function get_info_participant(){
        require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
        $query="SELECT * FROM PARTICIPANT";
        $select=$conn->prepare($query);
        $select->execute();
        //$result=$select->fetch();
        return $select;
    }

    function get_info_formation($id){
        require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
 
        $query="SELECT * FROM FORMATION WHERE ID_FORMATION='$id'";
        $select=$conn->prepare($query);
        $select->execute();
        $result=$select->fetch();
        return $result;
        }

    function get_info_formation_modif($id){
        require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
        $query="SELECT * FROM FORMATION WHERE ID_FORMATION='$id'";
        $select=$conn->prepare($query);
        $select->execute();
        $result=$select->fetch();
        return $result;
        }


    function get_info_cabinet_modif($id){
            require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
            $query="SELECT * FROM CABINET WHERE ID_CABINET='$id'";
            $select=$conn->prepare($query);
            $select->execute();
            $result=$select->fetch();
            return $result;
            }


    function get_user($log){
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
    
            
    
            //$LOG=htmlspecialchars(strtolower($_POST['pseudo']));
            //$MDP=htmlspecialchars($_POST['pass']);
    
            $dn="ou=IPS-CGRAE,".$ldapconfig['basedn'];
            $isITuser = ldap_search($ds,$dn,'(&(objectClass=User)(objectCategory=person)(sAMaccountname='.$log.'))');
    
            //$read = ldap_search($ds,$ldapconfig['basedn'],$LOG);
            $info = ldap_get_entries($ds, $isITuser);

            //var_dump($info);
            
            for ($i=0; $i<$info["count"]; $i++) {
                $log = $info[$i]["samaccountname"][0];
                $sn = $info[$i]["cn"][0];
                $mail = $info[$i]["mail"][0];
                //$physiq = $info[$i]["physicaldeliveryofficename"][0];
            }
    
            //var_dump($info);
    
            $bind = ldap_bind($ds,$info[0]["dn"]);
            // var_dump($bind);
            if  ( $info["count"]==0 ){
                header('Location:../../../Resources/login-form-20/index.php?erreur');
            }
           
            if ($info["count"] == 1  && $bind == FALSE){
                header('Location:../../../Resources/login-form-20/index.php?erreurs');
            }
            return $info;
    }
         
?> 