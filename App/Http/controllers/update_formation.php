<?php
require("../../model/connexion.php");
$id=$_GET['id'];
$intitule_formation=$_POST['intitule_formation'];
$date_debut_formation=$_POST['date_debut_formation'];
$date_fin_formation=$_POST['date_fin_formation'];
$heure_debut_formation=$_POST['heure_debut_formation'];
$heure_fin_formation=$_POST['heure_fin_formation'];
$lieu_formation=$_POST['lieu_formation'];
 //code...

try {
    $conn->beginTransaction();
        $req="UPDATE FORMATION SET INTITULE_FORMATION='$intitule_formation', DATE_DEBUT_FORMATION='$date_debut_formation', DATE_FIN_FORMATION='$date_fin_formation', HEURE_DEBUT_FORMATION='$heure_debut_formation', HEURE_FIN_FORMATION='$heure_fin_formation', LIEU_FORMATION='$lieu_formation' WHERE ID_FORMATION='$id' ";
       
       $conn->exec($req);
        //var_dump($conn);
    $conn->commit();
header('Location:update_formation_ok.php');
} catch  (Exception $th) {
    $conn->rollBack();
    var_dump($th);
    echo ($th->getMessage());
}
?>