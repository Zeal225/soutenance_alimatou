<?php require('../../App/Http/controllers/recup_fonct.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des participants à la formation</title>
</head>
<body>
<?php include('header.php') ; ?>
<?php include('nav.php');?>

<div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>ATTRIBUER UNE FORMATION &Agrave; UN PARTICIPANT</h3></div>
                <div class="card-body">
                    <?php   
                    $id=$_GET['ID'];
                    $resultat=get_info_formation($id);
                    $res=get_info_jointure_formation_formateur();
                    ?>
<h3 style="text-decoration:underline;">INFORMATIONS SUR LA FORMATION</h3>
<table class="table table-bordered table-sm display table table-striped table-center table-responsive" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">TH&Egrave;ME</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE (début)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE (fin)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">HEURE (début)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">HEURE (fin)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">LIEU</th>
                   
                                </tr>
                              </thead>
                              <tbody>
                             
                                <tr>
                                  <td style="font-weight: bold;"><?php echo strtoupper($resultat['INTITULE_FORMATION']);?></td>
                                  <td style="font-weight: bold;"><?php echo $resultat['DATE_DEBUT_FORMATION'];?></td>
                                  <td style="font-weight: bold;"><?php echo $resultat['DATE_FIN_FORMATION'];?></td>
                                  <td style="font-weight: bold;"><?php echo $resultat['HEURE_DEBUT_FORMATION'];?></td>
                                  <td style="font-weight: bold;"><?php echo $resultat['HEURE_FIN_FORMATION'];?></td>
                                  <td style="font-weight: bold;"><?php echo $resultat['LIEU_FORMATION'];?></td>
                                </tr>
</table><br>

<?php
$result=get_info_participant();
?>
<h3 style="text-decoration:underline;">INFORMATIONS SUR LE PARTICIPANT</h3>
<table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">NOM & PR&Eacute;NOM(S) </th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">SERVICE</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">FONCTION</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">STRUCTURE</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">LOGIN</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">T&Eacute;L&Eacute;PHONE</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">EMAIL</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">ACTIONS</th>
                   
                                </tr>
                              </thead>
                              <tbody>
                              <?php while ($donnees=$result->fetch()) {?>
                                <tr>
                                    <?php 
                                    $nom_prenom=str_replace("é","E", $donnees['NOM_PRENOM_PARTICIPANT']); 
                                    $structure=str_replace('"',"'", $donnees['STRUCTURE_PARTICIPANT']); 
                                    ?>
                                  <td style="font-weight: bold;"><?php echo strtoupper($nom_prenom);?></td>
                                  <td style="font-weight: bold;"><?php echo strtoupper($donnees['SERVICE_PARTICIPANT']);?></td>
                                  <td style="font-weight: bold;"><?php echo strtoupper($donnees['FONCTION_PARTICIPANT']);?></td>
                                  <td style="font-weight: bold;"><?php echo strtoupper($structure);?></td>
                                  <td style="font-weight: bold;"><?php echo $donnees['LOGIN_PARTICIPANT'];?></td>
                                  <td style="font-weight: bold;"><?php echo $donnees['TEL_PARTICIPANT'];?></td>
                                  <td style="font-weight: bold;"><?php echo $donnees['EMAIL_PARTICIPANT'];?></td>
                                  <td style="font-weight: bold;">
                                        <div class="form-check">
                                        <a href="participant_check.php?ID=<?php echo $datas['ID_PARTICIPANT'];?>"> <input class="form-check-input" name="checked_participant" type="checkbox" value="" id="flexCheckIndeterminate"></a>
                                        </div>
                                  </td>
                         
                                </tr>
                                <?php } ?>
                                
</table>

                    <div class="col-12 text-center">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){
      $('#myTab').DataTable({
          stateSave: true,
          "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json",
                  },
          "order": [],
          // dom: 'Bfrtip',
          // buttons: [
          //     'excelHtml5', 'print'
          // ]
      });
  });
</script>
</body>
</html>