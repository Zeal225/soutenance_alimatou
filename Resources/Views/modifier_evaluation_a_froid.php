<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3> <a href="evaluation_a_froid.php"> <i class="far fa-arrow-alt-circle-left text-light" id="tooltips_prev" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Précédent"></i></a> MODIFIER L'&Eacute;VALUATION</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                         
                      <div class="mb-3 col-sm-8">
                        <label for="validationTextarea" class="form-label" style="font-weight: bold;">Objectifs</label>
                        <textarea class="form-control rounded-pill" id="validationTextarea" rows="1" placeholder="Saisissez ici..." required></textarea>
                      
                        <div class="invalid-feedback">
                          Veuillez renseigner vos objectifs svp!
                        </div>
                      </div>
                     
           
                      <div class="mb-3 col-sm-4">
                      <label for="validationTextarea" class="form-label" style="font-weight: bold;">Note</label>
                      <select class="form-select form-select-lg mb-3 rounded-pill" aria-label=".form-select-lg example">
                            <option  disabled style="font-weight: bold;">S&Eacute;LECTIONNEZ LA NOTE</option>
                            <option value="1">3</option>
                            <option value="2">2</option>
                            <option value="3">1</option>
                        </select>
                        <div class="invalid-feedback">
                          Veuillez renseigner vos objectifs svp!
                        </div>
                      </div>
                      <div class="col-12 text-center"> 
                          <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                          <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button>
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