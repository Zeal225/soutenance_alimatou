<?php
session_start();
require('../../model/connexion.php');
//TABLE CABINET
$nom_cabinet=$_POST['nom_cabinet'];

    try {
        //code...
        $select = $conn->query('SELECT max(ID_CABINET) as ID_CABINET from CABINET');    
        $retour = $select->fetch();
        $id = $retour['ID_CABINET']+1;

        $conn->beginTransaction();

            $conn->exec("INSERT INTO CABINET(ID_CABINET, NOM_CABINET) VALUES('$id','$nom_cabinet')");
            var_dump($conn);
        $conn->commit();
//header('Location:../../../Public/Views/adhesion_ok.php');
header('location:../../../Resources/Views/parametrage.php');
    } catch  (Exception $th) {
        $conn->rollBack();
        var_dump($th);
        echo ($th->getMessage());
    }
   