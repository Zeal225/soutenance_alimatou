<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<body>
    <!-- Start your project here-->
  
        
           
                <div class=" text-dark"><h3>INFOS G&Eacute;N&Eacute;RALES</h3></div><hr style="border: none; border-top: 3px double #333; color: #333;
    overflow: visible;
    text-align: center;
    height: 5px; background: rgb(109, 138, 104) !important; ">
           
              
      
                <div class="card-body">

                <table class="table caption-top table-bordered table-responsive">
  <thead style="background: rgb(109, 138, 104) !important;">
    <tr>
 
      <th scope="col">Nom & Prénom(s)</th>
      <th scope="col">Thème</th>
      <th scope="col">Service</th>
      <th scope="col">Direction</th>
      <th scope="col">Lieu de formation</th>
      <th scope="col">Date</th>
      <th scope="col">Durée de formation</th>
      <th scope="col">Formateur</th>
      <th scope="col">Cabinet</th>
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
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
                    
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