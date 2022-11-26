<?php
                                                                       
require('../../model/connexion.php');
// 

    # code...

    //TABLE FORMATEUR
    $nom_prenom_formateur=$_POST['nom_prenom_formateur'];
    //TABLE FORMATION
    $intitule_formation=$_POST['intitule_formation'];
    $date_debut_formation=date('d/m/Y', strtotime($_POST['date_debut_formation']));
    $date_fin_formation=date('d/m/Y', strtotime($_POST['date_fin_formation']));
    $heure_debut_formation=$_POST['heure_debut_formation'];
    $heure_fin_formation=$_POST['heure_fin_formation'];
    $lieu_formation=$_POST['lieu_formation'];
   //TABLE OBJECTIF
    $libelle_objectif=$_POST['libelle_objectif'];
    $note_objectif=$_POST['note_objectif'];
    try {
        //code...
        $select = $conn->query('SELECT max(ID_FORMATION) as ID_FORMATION from FORMATION');    
        $retour = $select->fetch();
        $ids = $retour['ID_FORMATION']+1;

        $select = $conn->query('SELECT max(ID_OBJECTIF) as ID_OBJECTIF from OBJECTIF');    
        $retour = $select->fetch();
        $id = $retour['ID_OBJECTIF']+1;

        $conn->beginTransaction();

            $conn->exec("INSERT INTO FORMATION(ID_FORMATION, INTITULE_FORMATION, DATE_DEBUT_FORMATION, DATE_FIN_FORMATION, HEURE_DEBUT_FORMATION, HEURE_FIN_FORMATION, LIEU_FORMATION, FORMATEUR_ID_FORMATEUR) 
            VALUES('$ids','$intitule_formation','$date_debut_formation','$date_fin_formation','$heure_debut_formation','$heure_fin_formation','$lieu_formation','$nom_prenom_formateur')");
          
            $conn->exec("INSERT INTO OBJECTIF(ID_OBJECTIF, LIBELLE_OBJECTIF, NOTE_OBJECTIF, FORMATION_ID_FORMATION) VALUES('$id','$libelle_objectif','$note_objectif','$ids')");
           var_dump($conn);
        $conn->commit();
header('Location:../../../Resources/Views/formation.php');
    } catch  (Exception $th) {
        $conn->rollBack();
        var_dump($th);
        echo ($th->getMessage());
    }

// $id_formation=$_POST['FORMATION_ID_FORMATION'];
// $libelle_objectif=$_POST['libelle_objectif'];
// $note_objectif=$_POST['note_objectif'];
//     try {
//         //code...
//         $select = $conn->query('SELECT max(ID_OBJECTIF) as ID_OBJECTIF from OBJECTIF');    
//         $retour = $select->fetch();
//         $id = $retour['ID_OBJECTIF']+1;

//         $conn->beginTransaction();

//             $conn->exec("INSERT INTO OBJECTIF(ID_OBJECTIF, LIBELLE_OBJECTIF, NOTE_OBJECTIF, FORMATION_ID_FORMATION) VALUES('$id','$ids','$libelle_objectif','$note_objectif','$id_formation')");
//             var_dump($conn);
//         $conn->commit();
// //header('Location:../../../Public/Views/adhesion_ok.php');
// header('location:../../../Resources/Views/parametrage.php');
//     } catch  (Exception $th) {
//         $conn->rollBack();
//         var_dump($th);
//         echo ($th->getMessage());
//     }
   
// }

// }