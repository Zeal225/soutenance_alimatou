<?php
// phpinfo();
    session_start();

    // function getAD(){
    //     require_once("../model/connexion.php");
        
    // }
    require_once("../../model/connexion.php");
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

        

        $LOG=htmlspecialchars(strtolower($_POST['pseudo']));
        $MDP=htmlspecialchars($_POST['pass']);

        $dn="ou=IPS-CGRAE,".$ldapconfig['basedn'];
        $isITuser = ldap_search($ds,$dn,'(&(objectClass=User)(objectCategory=person)(sAMaccountname='.$LOG.'))');

        //$read = ldap_search($ds,$ldapconfig['basedn'],$LOG);
        $info = ldap_get_entries($ds, $isITuser);
        
        for ($i=0; $i<$info["count"]; $i++) {
            $log = $info[$i]["samaccountname"][0];
            $sn = $info[$i]["cn"][0];
            $mail = $info[$i]["mail"][0];
            //$physiq = $info[$i]["physicaldeliveryofficename"][0];
        }

        //var_dump($info);

        $bind = ldap_bind($ds,$info[0]["dn"],$MDP);
        //var_dump($bind);
        if  ( $info["count"]==0 ){
            header('Location:../../../Resources/login-form-20/index.php?erreur');
        }
       
        if ($info["count"] == 1  && $bind == FALSE){
            header('Location:../../../Resources/login-form-20/index.php?erreurs');
        }
        //var_dump($info["count"]);
        
        if($info["count"] == 1  && $bind == TRUE){
            //var_dump($LOG);
            $requpdates = "SELECT ID_USERS FROM USERS_CGRAE WHERE LOG_USERS = '$LOG'";
            
            $recup_valeur= $conn->query($requpdates);
            
            //var_dump($recup_valeur);

            $chk_pseudo = $recup_valeur->fetch(PDO::FETCH_ASSOC);
            //var_dump($chk_pseudo);

            if($chk_pseudo == '1' || $chk_pseudo > '1' ){
                
                //var_dump($chk_pseudo);

               $requet = "SELECT * FROM USERS_CGRAE WHERE LOG_USERS=?";

               $param= array($LOG);
               $resultat = $conn->prepare($requet);
               $resultat->execute($param);  

               //var_dump($param);
                // $logMsg = "=== CONNEXION DE === ".$LOG."" . PHP_EOL;
                // $logger->info($logMsg);

                if ($user=$resultat->fetch()) {
                    if ($user['ROLE_USERS']=="PARTICIPANT" && $user['ETAT_USERS']==1) {
                        $_SESSION['USERS_CGRAE']=$user;
                        //var_dump($user);
                         header('Location:../../../Resources/Views/formation.php');
                    }else {
                        if ($user['ROLE_USERS']=="ADMIN" && $user['ETAT_USERS']==1) {
                               $_SESSION['USERS_CGRAE']=$user;
                               header('Location:../../../Resources/Views/formation.php');
                            }
                    if ($user['ROLE_USERS']=="DEVELOPPEUR" && $user['ETAT_USERS']==1) {
                        $_SESSION['USERS_CGRAE']=$user;
                            header('Location:../../../Resources/Views/formation.php');
                         }
                        
                        // if ($user['ROLE_USERS']=="RESPONSABLE" && $user['ETAT_USERS']==1) {
                        //     $_SESSION['USERS_CGRAE']=$user;
                        //     header('Location:../views/views-consultation.php');
                        // }
                    }
                   
                }
                // $logger->info("=== CONNEXION OK DE ! ==== ".$LOG." " . PHP_EOLMsg);

            }else {
                $select = $conn->query('SELECT max(ID_USERS) as ID_USERS from USERS_CGRAE');    
                $retour = $select->fetch();
                $id = $retour['ID_USERS']+1;

                $role="PARTICIPANT";
                $etat=1;
                // $date_add = date ('d/m/Y');
                // $date_Heur = date ('H:i:s');
                $null="";

                try {
                    $conn->beginTransaction();
                        $conn->exec("INSERT INTO USERS_CGRAE(ID_USERS,NOM_PRENOM_USERS,LOG_USERS,ROLE_USERS,ETAT_USERS)
                            VALUES('$id','$sn','$LOG','$role','$etat')");

                    $conn->commit();
                    // header('Location:../views/view-consultation.php');
                } catch (Throwable $th) {
                    $conn->rollBack();
                    echo ($th->getMessage());
                }
                $requets = "SELECT * FROM USERS_CGRAE WHERE LOG_USERS=?";

                $params= array($LOG);
                $resultats = $conn->prepare($requets);
                $resultats->execute($params);

                if ($users=$resultats->fetch()) {
                    if ($users['ROLE_USERS']=="PARTICIPANT" && $users['ETAT_USERS']==1) {
                        $_SESSION['USERS_CGRAE']=$users;
                        //var_dump($user);
                        header('Location:../../../Resources/Views/formation.php');
                    }
                }
                
            }
        }
    //}
?>