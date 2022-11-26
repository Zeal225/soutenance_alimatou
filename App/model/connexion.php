<?php

// require __DIR__ . '/../../vendor/autoload.php';

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $logger = new Logger('SimpleLogger');
// $logger->pushHandler(new StreamHandler(__DIR__.'/../../serverBDCconnect.log', Logger::DEBUG));

$tns = " 
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = 10.20.4.80)(PORT = 1522))
    )
    (CONNECT_DATA =
    (SERVICE= orcl)
      (SERVICE_NAME = orcl)
    )
  )
     ";
$db_username = "app_comp";
$db_password = "cgrae2020";

try{
    // $logMsg = "=== ESSAIE DE CONNEXION BD ===" . PHP_EOL;
    // $logger->info($logMsg);

    $conn= new PDO("oci:dbname=".$tns,$db_username,$db_password,array(PDO::ATTR_AUTOCOMMIT => false));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$logger->info("=== CONNEXION OK ! ====" . PHP_EOLMsg);
}catch(PDOException $e){
     echo ($e->getMessage());
} 
?> 
