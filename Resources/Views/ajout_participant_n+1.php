<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3><a href="modifier_formation.php"> <i class="far fa-arrow-alt-circle-left text-light" id="tooltips_previous" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Précédent"></i></a> AJOUTER PARTICIPANT & N+1</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp; 
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label text-center" style="font-weight: bold;">Login Participant</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom01" placeholder="Saisissez  ici..." required>
    <div class="invalid-feedback">
      Veuillez renseigner le login svp!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label text-center" style="font-weight: bold;">Login N+1</label>
    <input type="text" class="form-control rounded-pill" id="validationCustom02" placeholder="Saisissez  ici..." required>
    <div class="invalid-feedback">
      Veuillez renseigner le login svp!
    </div>
  </div>
  
 
  <div class="col-12 text-center"> <br>
    <button class="btn btn-success rounded-pill" type="submit" style="font-weight: bold ; background: rgb(255, 113, 19) !important;"><i class="fas fa-user-plus"></i> Ajouter</button><br><br>
  </div>
  
</form>
<div class="container container-form">
                        <div class="container-fluid">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-light text-center">R&Eacute;SULTATS</h3>
                            </div>
                            <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                           <table class="table table-bordered table-sm table-responsive">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">LOGIN (Participant)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">NOM & PR&Eacute;NOM(S) (Participant)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">LOGIN (N+1)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">NOM & PR&Eacute;NOM(S) (N+1)</th>
                                  
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">DIRECTION</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">SERVICE (Participant)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">ACTIONS</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>...</td>
                                  <td>...</td>
                                  <td>...</td>
                                  <td>...</td>
                                  <td>...</td>
                                  <td>...</td>
                                 
                                  <td>
                                  <a href="modifier_participant.php"><button class="btn btn-rounded waves-effect text-light " type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_mod" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a><hr>
                                  <button class="btn btn-rounded waves-effect text-light" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_sup" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button>
                                
                                </tr>
                                </tbody>
                            </table>
                            
                         
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
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