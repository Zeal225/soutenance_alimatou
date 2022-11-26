<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<?php require('../../App/Http/controllers/recup_fonct.php');?>
<?php 
 $resultat=get_info_formation_modif($_GET['ID']);
?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3> <a href="formation.php"> <i class="far fa-arrow-alt-circle-left text-light" id="tooltips_previous" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Précédent"></i></a> MODIFIER LES INFORMATIONS DE LA FORMATION</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" method="POST" action="../../App/Http/controllers/update_formation.php?id=<?php echo $resultat['ID_FORMATION'];?>" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Intitulé de la formation (thème)</label>
    <input type="text" class="form-control rounded-pill" name="intitule_formation" id="validationCustom01" value="<?php echo $resultat['INTITULE_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner le thème SVP!
    </div>
  </div>
  <?php //$resultat['DATE_DEBUT_FORMATION']=date('d/m/Y', strtotime($_POST['date_debut_formation'])); 
 
  ?>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Date (début)</label>
    <input type="text" class="form-control rounded-pill" name="date_debut_formation" id="validationCustom01" value="<?php echo $resultat['DATE_DEBUT_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner la date SVP!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Date (fin)</label>
    <input type="text" class="form-control rounded-pill" name="date_fin_formation" id="validationCustom01"value="<?php echo $resultat['DATE_FIN_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner la date SVP!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Heure (début)</label>
    <input type="time" class="form-control rounded-pill" name="heure_debut_formation" id="validationCustom01" value="<?php echo $resultat['HEURE_DEBUT_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner l'heure SVP!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Heure (fin)</label>
    <input type="time" class="form-control rounded-pill" name="heure_fin_formation" id="validationCustom01" value="<?php echo $resultat['HEURE_FIN_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner l'heure SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">Lieu</label>
    <input type="text" class="form-control rounded-pill" name="lieu_formation" id="validationCustom02" value="<?php echo $resultat['LIEU_FORMATION'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner le lieu SVP!
    </div>
  </div>
                  
    
  <div class="col-12 text-center"> <br>
    <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
    
    <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button>
    <a href="ajout_participant_n+1.php"><input type="button" value="+" class="btn waves-effect text-light" style="font-weight: bold; background: rgb(255, 113, 19) !important;" id="tooltips_add" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Ajouter un participant"/>
                                  </a>

                                  
<br><br>
  </div>
   
</form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>