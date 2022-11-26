<?php
    session_start();
    $id=$_GET['ID'];
    require ('C:\laragon\www\EVALUATION_FORMATION\App\model\connexion.php');
        $query=$conn->prepare("DELETE FROM FORMATEUR WHERE ID_FORMATEUR='$id'");
        header("Location:parametrage.php");
        $query->execute();
        $query->closeCursor();
?>

























