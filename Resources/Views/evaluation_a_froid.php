<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>FICHE D'&Eacute;VALUATION &Agrave; FROID</h3>   
                    <button type="button" class="btn btn-primary position-relative">
          
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <label class="text-light">Alertes</label>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-light" href="evaluation_a_chaud.php" style="font-weight: bold; background: rgb(109, 138, 104) !important;">&Eacute;valuation à chaud</a></li>
                            <li><a class="dropdown-item text-light" href="evaluation_a_froid.php" style="font-weight: bold; background: rgb(109, 138, 104) !important;">&Eacute;valuation à froid</a></li>
                        </ul>
             

  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
             </div>
                <div class="card-body">
                <div class="form-check form-check-inline">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-body">
                           
                <form class="row g-3 needs-validation"  action="../../App/Http/controllers/insert_evaluation_af.php" method="post" novalidate>
                          <h3>&Eacute;VALUATION DE L'EFFICACIT&Eacute;</h3>
                      
                         <p class="note note-dark alert alert-warning alert-dismissible fade show" role="alert" style="background: rgb(235,251,227) !important;">
  <strong >Cochez la case correspondant à votre appréciation:</strong><br> <label style="font-weight: bold;">3</label> (objectifs largement atteints)≥50%<br><label style="font-weight: bold;">2</label> (objectifs atteints)=50%<br><label style="font-weight: bold;">1</label> (objectifs non atteints)≤50% 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</p>

<hr size="5" style="background-color:  green !important;">
                           
                      <div class="mb-3 col-sm-8">
                        <label for="validationTextarea" class="form-label" style="font-weight: bold;">Objectifs</label>
                        <p class="note note-dark" role="alert">
  <label >Objectifs...</label>

</p>
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
                      
                 
                   
                      
                    </div><br>


                    </div>
  
                
                <div class="container container-form">
                        <div class="container-fluid">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-light text-center">R&Eacute;SULTATS</h3>
                            </div>
                            <div class="card-body">
                            <div class="row row-cols-1">
                          
                            <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab" style="width:100%">
                             
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">OBJECTIFS</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">NOTES</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-light">ACTIONS</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>...</td>
                                  <td>...</td>
                                 
                                 
                                  <td>
                                  <a href="modifier_evaluation_a_froid.php"><button class="btn btn-rounded waves-effect text-light " type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_modif" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a>
                                  <button class="btn btn-rounded waves-effect text-light" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_supp" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button>
                                  </td>
                                </tr>

                                </tbody>
                            </table>
                            
                         
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><br><br>
                     
                          <h3>NIVEAU GLOBAL:</h3><hr size="5" style="background-color:  green !important;"><br>
            
                          <form class="row g-3 needs-validation" novalidate>
                          <div class="mb-3 col-sm-8">
                        <label for="validationTextarea" class="form-label" style="font-weight: bold;">Si les objectifs ne sont pas atteints, pourquoi ?</label>
                        <textarea class="form-control rounded-pill" id="validationTextarea" placeholder="Expliquez ici..." required></textarea>
                      
                        <div class="invalid-feedback">
                          Veuillez renseigner le champ svp!
                        </div>
                      </div>

                      <div class="mb-3 col-sm-8">
                        <label for="validationTextarea" class="form-label" style="font-weight: bold;">Les améliorations  souhaitées</label>
                        <textarea class="form-control rounded-pill" id="validationTextarea" placeholder="Expliquez ici..." required></textarea>
                      
                        <div class="invalid-feedback">
                          Veuillez renseigner le champ svp!
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
})();


var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
var collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl)
})</script>

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