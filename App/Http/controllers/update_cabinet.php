<?php
require("../../model/connexion.php");
$id=$_GET['id'];

$nom_cabinet=$_POST['nom_cabinet'];
 //code...

try {
    $conn->beginTransaction();
        $req="UPDATE CABINET SET NOM_CABINET='$nom_cabinet' WHERE ID_CABINET='$id' ";
       
       $conn->exec($req);
        //var_dump($conn);
    $conn->commit();
header('Location:../../../Resources/Views/parametrage.php');
} catch  (Exception $th) {
    $conn->rollBack();
    var_dump($th);
    echo ($th->getMessage());
}
?>