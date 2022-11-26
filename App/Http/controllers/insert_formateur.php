<?php
session_start();
require('../../model/connexion.php');
// 

    # code...

//TABLE FORMATION
// $id_formation=$_POST['ID_FORMATION'];
    $nom_cabinet=$_POST['nom_cabinet'];
    $nom_prenom_formateur=$_POST['nom_prenom_formateur'];
    $tel_formateur=$_POST['tel_formateur'];
    $fonction_formateur=$_POST['fonction_formateur'];
   



    try {
        //code...
        $select = $conn->query('SELECT max(ID_FORMATEUR) as ID_FORMATEUR from FORMATEUR'); 
        $retour = $select->fetch();
        $id_f = $retour['ID_FORMATEUR']+1;

        $conn->beginTransaction();

            $conn->exec("INSERT INTO FORMATEUR(ID_FORMATEUR, NOM_PRENOM_FORMATEUR, TEL_FORMATEUR, FONCTION_FORMATEUR, CABINET_ID_CABINET) 
            VALUES('$id_f','$nom_prenom_formateur','$tel_formateur','$fonction_formateur','$nom_cabinet')");
            var_dump($conn);
        $conn->commit();
header('Location:../../../Resources/Views/parametrage.php');
    } catch  (Exception $tPublich) {
        $conn->rollBack();
        var_dump($th);
        echo ($th->getMessage());
    }


// }

// }