<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>HISTORIQUE DES FORMATIONS</h3></div>
                <div class="card-body">

<div class="container container-form">
                        <div class="container-fluid">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-light text-center">FORMATIONS EFFECTU&Eacute;ES</h3>
                            </div>
                            <div class="card-body">
                            <div class="row row-cols-1">
                           <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">INTITUL&Eacute; DE LA FORMATION (Thème)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE D&Eacute;BUT</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE FIN</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">NOM FORMATEUR</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">CABINET</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">LIEU</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">ACTIONS</th>
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
                                 
                                  <td><a href="view.php"><i class="fas fa-eye  text-primary" style="font-size: 40px;"></i></a>
                                </td>
                                </tr>
                      
                                </tbody>
                            </table>
                      
                            </div>
                          </div>
                        </div>
                      </div><br><br>
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