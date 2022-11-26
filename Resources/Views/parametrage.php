

<body>
<?php include('header.php') ; ?>
<?php include('nav.php') ;?>
<?php require('../../App/Http/controllers/recup_fonct.php');?>

<?php 
 $result=get_info_cabinet();
 $results=get_info_cabinet_select();
 $resultat=get_info_jointure_formateur_cabinet();
 $res=get_info_participant();
 
?>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>PARAM&Eacute;TRAGES</h3></div>
                <div class="card-body"><br>
                <div class="row">
                
             

 
    <div class="col-sm-4">
        <div class="card">
        <div class="card-header text-light"><h6>CABINET</h6></div>
            <div class="card-body">
            <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_cabinet.php" method="post" novalidate>
                <div class="col-12"> <br>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Nom du cabinet</label>
                        <input type="text" name="nom_cabinet" class="form-control rounded-pill" id="validationCustom01" placeholder="Saisissez le nom du cabinet ici..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner le nom du cabinet SVP!
                        </div><br>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                        <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>



  <div class="col-sm-8">
    <div class="card">
    <div class="card-header text-light"><h6>FORMATEUR</h6></div>
      <div class="card-body">
          
      <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_formateur.php" method="post" novalidate>
      <div class="col-sm-4">
                    <label for="validationTextarea" class="form-label" style="font-weight: bold;">Nom du cabinet</label>
                    
                    <select name="nom_cabinet" class="form-select form-select-lg mb-3 rounded-pill" aria-label=".form-select-lg example">
                          <option  disabled style="font-weight: bold;">S&Eacute;LECTIONNEZ LE CABINET</option>
                          <?php while ($data=$results->fetch()) {?>
                              <option value="<?php echo $data['ID_CABINET'];?>">
                         
                             
                             <?php echo $data['NOM_CABINET'];
                              } ?></option>
                      </select>
                     
                    </div>
                    <div class="col-sm-8">
          <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Nom & Prénom(s)</label>
          <input type="text" name="nom_prenom_formateur" class="form-control rounded-pill" id="validationCustom01" placeholder="Nom..." required>
          <div class="invalid-feedback">
          Veuillez renseigner le nom du formateur SVP!
          </div>
          </div>
          <div class="col-sm-6">
          <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Téléphone</label>
          <div class="input-group has-validation">
          <span class="input-group-text form-control rounded-pill" id="inputGroupPrepend" style="font-weight: bold; background: rgb(169, 169,169) !important;">+225</span>
          <input type="text" name="tel_formateur" class="form-control rounded-pill" id="validationCustom01" placeholder="Téléphone..." required>
          <div class="invalid-feedback">
          Veuillez renseigner le numéro de téléphone du formateur SVP!
          </div>
          </div>
          </div>
    
          <div class="col-sm-6">
          <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Fonction</label>
          <input type="text" name="fonction_formateur" class="form-control rounded-pill" id="validationCustom01" placeholder="Fonction..." required>
          <div class="invalid-feedback">
          Veuillez renseigner le numéro de téléphone du formateur SVP!
          </div>
          </div>
 
          <div class="col-md-6">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                        <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
                    </div>
</form>
      </div>
    </div><br>
  </div>





  <div class="col-md-5">
  <div class="row row-cols-1">
  <h3 style="text-decoration:underline;">LISTE DES CABINETS</h3>
                            <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark"> CABINET</th>
                                  
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">ACTIONS</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php while ($datas=$result->fetch()) {
                                      # code...
                                  ?>
                                <tr>
                                  <td><?php 
                                echo strtoupper($datas['NOM_CABINET']);
                                  ?></td>
                          
                                  <td>
                                  <a href="modifier_cabinet.php?ID=<?php echo $datas['ID_CABINET'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_modifie" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a>
                                  <a href="supprimer_cabinet.php?ID=<?php echo $datas['ID_CABINET'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_supprim" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button></a>
                                
                                </td>
                                </tr>
                      <?php  } ?>
                                </tbody>
                            </table>
                            
                         
                            </div>
                            </div>

                            <div class="col-md-7">
  <div class="row row-cols-1">
  <h3 style="text-decoration:underline;">LISTE DES FORMATEURS</h3>
                            <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab2" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark"> CABINET</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark"> NOM & PR&Eacute;NOM(S)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark"> TELEPHONE</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark"> FONCTION</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">ACTIONS</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php while ($donnees=$resultat->fetch()) {
                                      # code...
                                  ?>
                                <tr>
                                 <td>
                                   <?php 
                                echo strtoupper($donnees['NOM_CABINET']);
                                  ?>
                                 </td>
                                  <td><?php 
                                echo strtoupper($donnees['NOM_PRENOM_FORMATEUR']);
                                  ?></td>
                                  <td><?php 
                                echo $donnees['TEL_FORMATEUR'];
                                  ?></td>
                                  <td><?php 
                                echo strtoupper($donnees['FONCTION_FORMATEUR']);
                                  ?></td>                        
                                  <td>
                                  <a href="modifier_formateur.php"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_modifie" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a>
                                  <a href="supprimer_formateur.php?ID=<?php echo $donnees['ID_FORMATEUR'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_supprim" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button></a>
                                </td>
                                </tr>
                                <?php  } ?>
                                </tbody>
                            </table>
                            
                         
                            </div><br><br>
                            
                            </div> 
      <!-- <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"> -->
        <div >    

     
          <?php
             //PARTICIPANT
           // $get_log=get_user($_POST['login_participant']);
            // var_dump($get_log);
            // $recup_log=$_POST['login_participant'];
            // // var_dump($recup_log);
            // for ($i=0; $i<$get_log["count"]; $i++) {
            //   $login = $get_log[$i]["samaccountname"][0];
            //   $nom_prenom = $get_log[$i]["cn"][0];
            //   $mail = $get_log[$i]["mail"][0];
            //   $fonction=$get_log[$i]["description"][0];
            //   $tel= $get_log[$i]["telephonenumber"][0];
            //   $structure= $get_log[$i]["department"][0];
              //$physiq = $info[$i]["physicaldeliveryofficename"][0];
         // }
          ?>

<?php
   //SUPERIEUR
            // $get_log=get_user($_POST['login_participant1']);
            // // var_dump($get_log);
            // $recup_log=$_POST['login_participant1'];
            // // var_dump($recup_log);
            // for ($i=0; $i<$get_log["count"]; $i++) {
            //   $login1 = $get_log[$i]["samaccountname"][0];
            //   $nom_prenom1 = $get_log[$i]["cn"][0];
            //   $fonction1=$get_log[$i]["description"][0];
            //   $structure1= $get_log[$i]["department"][0];
              //$physiq = $info[$i]["physicaldeliveryofficename"][0];
          //}
          ?>
        </div>
      <!-- </div> -->
    <div>
        <div class="card">
        <div class="card-header text-light"><h6>AJOUTER UN NOUVEAU PARTICIPANT</h6></div>
            <div class="card-body">
            <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_participant.php" method="post" novalidate>
<div class="col-md-3"></div>
            <div class="col-md-3">
                        <input type="text" name="login" class="form-control rounded-pill" id="validationCustom01" placeholder="Login..." value="<?php //echo $login;?>" required>
                        <div class="invalid-feedback">
                            Veuillez renseigner le login SVP!
                        </div>
                </div>
              
                  <div class="col-md-6">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-plus"></i> Ajouter</button>
                    </div>
        
            <!-- <form class="row g-3 needs-validation" action="" method="post" novalidate> -->
          
            <!-- <div class="col-md-4" hidden>
                        <input type="text" name="login_participant" class="form-control rounded-pill" id="validationCustom01" placeholder="Login..." required >
                        <div class="invalid-feedback">
                            Veuillez renseigner le login SVP!
                        </div><br>
                </div> -->
                    <!-- <div class="col-sm-7">
                    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Nom & Prénom(s)</label>
                        <input type="text" name="nom_prenom_participant" class="form-control rounded-pill" id="validationCustom01" value="<?php /*if (!empty($get_log["cn"][0])){*/ //echo $nom_prenom;/* }*/?>" placeholder="Nom & Prénom(s)..." required>
                        <div class="invalid-feedback">
          Veuillez renseigner le nom et prénom(s) SVP!
          </div>
          </div>
        
          <div class="col-sm-5">
          <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Service</label>
          <input type="text" name="service_participant" class="form-control rounded-pill" id="validationCustom01" placeholder="Service..." required>
          <div class="invalid-feedback">
          Veuillez renseigner le service SVP!
          </div>
          </div>
    
                <div class="col-sm-6">
                <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Fonction</label>
                <input type="text" name="fonction_participant" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $fonction;?>" placeholder="Fonction..." required>
                <div class="invalid-feedback">
                Veuillez renseigner le numéro de téléphone SVP!
                </div>
                </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Structure</label>
                        <input type="text" name="structure_participant" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $structure;?>" placeholder="Structure..."  required>
                        <div class="invalid-feedback">
                            Veuillez renseigner la structure SVP!
                        </div><br>
                    </div>
                    
                    <div class="col-sm-6">
          <label for="validationCustom01" class="form-label" style="font-weight: bold;"> Téléphone</label>
          <div class="input-group has-validation">
          <input type="text" name="tel_participant" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $tel;?>" placeholder="Téléphone..." required>
          <div class="invalid-feedback">
          Veuillez renseigner le numéro de téléphone SVP!
          </div>
          </div>
          </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Email</label>
                        <input type="text" name="email_participant" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $mail;?>" placeholder="Email..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner l'email SVP!
                        </div><br>
                    </div>
          <div class="col-md-6">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                        <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
                    </div> -->
<!-- </form> -->
            </div>
            
        </div>
        <br>
        <div class="col-md-12">
            <div class="row row-cols-1">
                            <h3 style="text-decoration:underline;">LISTE DES PARTICIPANTS</h3>
                            <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab3" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">NOM & PR&Eacute;NOM(S)</th>
                                  
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
                                  <?php while ($datas=$res->fetch()) {
                                      # code...
                                  ?>
                                <tr>
                                  <td><?php 
                                $nom_prenom=str_replace('é','E',$datas['NOM_PRENOM_PARTICIPANT']);
                                echo strtoupper($nom_prenom);
                                  ?></td>
                                  <td><?php 
                                echo strtoupper($datas['SERVICE_PARTICIPANT']);
                                  ?></td><td><?php 
                                  echo strtoupper($datas['FONCTION_PARTICIPANT']);
                                    ?></td>
                                      <td><?php 
                                      
                                $structure=str_replace('"',"'",$datas['STRUCTURE_PARTICIPANT']);
                                echo strtoupper($structure);
                                  ?></td>
                                  <td><?php 
                                echo $datas['LOGIN_PARTICIPANT'];
                                  ?></td>
                                  <td><?php 
                                  echo strtoupper($datas['TEL_PARTICIPANT']);
                                    ?></td>
                                    <td><?php 
                                  echo $datas['EMAIL_PARTICIPANT'];
                                    ?></td>
                          
                                  <td>
                                  <a href="modifier_participant.php?ID=<?php echo $datas['ID_PARTICIPANT'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_modifie" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a>
                                  <a href="supprimer_participant.php?ID=<?php echo $datas['ID_CABIID_PARTICIPANTNET'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_supprim" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button></a>
                                
                                </td>
                                </tr>
                      <?php  } ?>
                                </tbody>
                            </table>
                            
                         
                            </div><br><br>
                            </div>

    </div>



    <div class="col-sm-5">
        <div class="card">
        <div class="card-header text-light"><h6>SUP&Eacute;RIEUR</h6></div>
            <div class="card-body">
            <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_superieur.php" method="post" novalidate>
            
<div class="col-md-4">
            <input type="text" name="login_participant1" class="form-control rounded-pill" id="validationCustom01" placeholder="Login..." value="<?php //echo $login1;?>" required>
            <div class="invalid-feedback">
                Veuillez renseigner le login SVP!
            </div><br>
    </div>
      <div class="col-md-6">
            <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-plus"></i></button>
        </div>
  </form>
            <!-- <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_superieur.php" method="post" novalidate>
            <div class="col-md-4" hidden>
                        <input type="text" name="login_participant1" class="form-control rounded-pill" id="validationCustom01" placeholder="Login..." required >
                        <div class="invalid-feedback">
                            Veuillez renseigner le login SVP!
                        </div><br>
                </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Nom & Prénom(s)</label>
                        <input type="text" name="nom_prenom_superieur" class="form-control rounded-pill" id="validationCustom01" value="<?php /*if (!empty($get_log["cn"][0])){*/ //echo $nom_prenom1;/* }*/?>" placeholder="Nom & Prénom(s)..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner le nom et prénom(s) du supérieur SVP!
                        </div><br>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Fonction</label>
                        <input type="text" name="fonction_superieur" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $fonction1;?>" placeholder="Fonction..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner la fonction du supérieur SVP!
                        </div><br>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Structure</label>
                        <input type="text" name="structure_superieur" class="form-control rounded-pill" id="validationCustom01" value="<?php //echo $structure1;?>" placeholder="Structure..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner la structure du supérieur SVP!
                        </div><br>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                        <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
                    </div>
                </div>
            </form> -->
            </div>
        </div><br>
    </div>




    <!-- <div class="col-sm-4">
        <div class="card">
        <div class="card-header text-light"><h6>OBJECTIF</h6></div>
            <div class="card-body">
            <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_objectif.php" method="post" novalidate>
                <div class="col-12"> <br>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label" style="font-weight: bold;">Libellé</label>
                        <input type="text" name="libelle_objectif" class="form-control rounded-pill" id="validationCustom01" placeholder="Libellé..." required>
                        <div class="invalid-feedback">
                            Veuillez renseigner l'objectif SVP!
                        </div><br>
                    </div>

                    <div class="col-md-12">
                      <label for="validationTextarea" class="form-label" style="font-weight: bold;">Note</label>
                      <select class="form-select form-select-lg mb-3 rounded-pill"  name="note_objectif"  aria-label=".form-select-lg example">
                            <option  disabled style="font-weight: bold;">S&Eacute;LECTIONNEZ LA NOTE</option>
                            <option value="1">3</option>
                            <option value="2">2</option>
                            <option value="3">1</option>
                        </select>
                        <div class="invalid-feedback">
                        Veuillez renseigner la note SVP!
                        </div>
                      </div>
                      

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                        <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div> -->


<script>(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();</script>

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

<script>
  $(document).ready(function(){
      $('#myTab2').DataTable({
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
<script>
  $(document).ready(function(){
      $('#myTab3').DataTable({
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


