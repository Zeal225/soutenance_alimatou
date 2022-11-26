<?php
session_start();
$id=$_GET['ID'];
require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
     //var_dump($id);
    
//try{
    
    $query=$conn->prepare("DELETE FROM CABINET WHERE ID_CABINET='$id'");
    header("Location:parametrage.php");
    $query->execute();
    $query->closeCursor();
     //var_dump($conn->exec($query));
    // $select->execute();
// var_dump($test);
    //$result=$select->fetch();
    //return $query;
    // header("Location:parametrage.php");
//}
//catch(PDOException $e){
    //echo "Erreur : " . $e->getMessage();
//}
?>

























