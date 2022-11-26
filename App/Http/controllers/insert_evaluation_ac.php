<?php
session_start();
require('../../model/connexion.php');
// 

    # code...

//EVALUATION A CHAUD

    //$id_participation=$_POST['id_participation'];
    $accueil_evaluation_ac=$_POST['accueil_evaluation_ac'];
    $lieu_evaluation_ac=$_POST['lieu_evaluation_ac'];
    $outils_fournitures=$_POST['outils_fournitures'];
    $attentes_contenu=$_POST['attentes_contenu'];
    $contenu_utiles_travail=$_POST['contenu_utiles_travail'];
    $exercices_exemples=$_POST['exercices_exemples'];
    $methode_enseignement=$_POST['methode_enseignement'];
    $support_cours_exercices=$_POST['support_cours_exercices'];
    $rythme_travail=$_POST['rythme_travail'];
    $maitre_sujet=$_POST['maitre_sujet'];
    $qualite_communication=$_POST['qualite_communication'];
    $capacite_ecoute=$_POST['capacite_ecoute'];
    $maitrise_cours=$_POST['maitrise_cours'];
    $degre_satisfaction=$_POST['degre_satisfaction'];

    try {
        //code...
        $select = $conn->query('SELECT max(ID_EVALUATION_AC) as ID_EVALUATION_AC from EVALUATION_A_CHAUD');    
        $retour = $select->fetch();
        $id = $retour['ID_EVALUATION_AC']+1;


        $select = $conn->query('SELECT max(ID_PARTICIPATION) as ID_PARTICIPATION from PARTICIPATION');    
        $retour = $select->fetch();
        $ids = $retour['ID_PARTICIPATION']+1;
        $conn->beginTransaction();

            $conn->exec("INSERT INTO EVALUATION_A_CHAUD(ID_EVALUATION_AC, ACCUEIL_EVALUATION_AC, LIEU_EVALUATION_AC, OUTILS_FOURNITURES, ATTENTES_CONTENU, CONTENU_UTILES_TRAVAIL, EXERCICES_EXEMPLES, METHODE_ENSEIGNEMENT, SUPPORT_COURS_EXERCICES, RYTHME_TRAVAIL, MAITRE_SUJET, QUALITE_COMMUNICATION, CAPACITE_ECOUTE, MAITRISE_COURS, DEGRE_SATISFACTION, PARTICIPATION_ID_PARTICIPATION) 
            VALUES('$id','$accueil_evaluation_ac','$lieu_evaluation_ac','$outils_fournitures','$attentes_contenu','$contenu_utiles_travail','$exercices_exemples','$methode_enseignement','$support_cours_exercices','$rythme_travail','$maitre_sujet','$qualite_communication','$capacite_ecoute','$maitrise_cours','$degre_satisfaction','$ids')");
            var_dump($conn);
        $conn->commit();
header('Location:../../Resources/Views/evaluation_ac.php');
    } catch  (Exception $th) {
        $conn->rollBack();
        var_dump($th);
        echo ($th->getMessage());
    }


// }

// }