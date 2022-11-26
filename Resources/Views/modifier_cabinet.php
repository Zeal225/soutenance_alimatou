<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<?php require('../../App/Http/controllers/recup_fonct.php');?>
<?php 
 $resultat=get_info_cabinet_modif($_GET['ID']);
?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3> <a href="formation.php"> <i class="far fa-arrow-alt-circle-left text-light" id="tooltips_previous" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Précédent"></i></a> MODIFIER LES INFORMATIONS DU CABINET</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" method="POST" action="../../App/Http/controllers/update_cabinet.php?id=<?php echo $resultat['ID_CABINET'];?>" novalidate>
  <div class="col-md-8">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Cabinet</label>
    <input type="text" class="form-control rounded-pill" name="nom_cabinet" id="validationCustom01" value="<?php echo $resultat['NOM_CABINET'];?>" required>
    <div class="invalid-feedback">
      Veuillez renseigner le thème SVP!
    </div>
  </div>

                  
    
  <div class="col-12 text-center"> <br>
    <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
    
    <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button>
    
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