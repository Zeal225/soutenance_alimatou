<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3> <a href="formation.php"> <i class="far fa-arrow-alt-circle-left text-light" id="tooltips_previous" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Précédent"></i></a> MODIFIER LES INFORMATIONS DU PARTICIPANT</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">LOGIN (Participant)</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner le login SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">NOM & PR&Eacute;NOM(S) (Participant)</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner le nom & prénoms SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">LOGIN (N+1)</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner le login SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">NOM & PR&Eacute;NOM(S) (N+1)</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner le nom & prénoms SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">DIRECTION</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner la direction SVP!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">SERVICE (Participant)</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner le service SVP!
    </div>
  </div>
  
  
  <div class="col-12 text-center"> <br>
  </td>
   <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
    
    <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
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