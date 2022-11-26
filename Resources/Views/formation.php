

<body>
<?php include('header.php') ; ?>
<?php include('nav.php') ;?>
<?php require('../../App/Http/controllers/recup_fonct.php');?>

<?php 
//$resultat=get_info_formation();
 $result=get_info_formateur_select();
 $res=get_info_jointure_formation_formateur();

?>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>INITIATION DE LA FORMATION</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_formation.php" method="post" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Intitulé de la formation (thème)</label>
    <input type="text" name="intitule_formation" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner le thème SVP!
    </div>
  </div>
  <!-- <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">Formateur</label>
    <input type="text" name="" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner le nom du formateur SVP!
    </div>
  </div> -->
  <!-- <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label" style="font-weight: bold;">Cabinet de formation</label>
    <div class="input-group has-validation">
      <span class="input-group-text rounded-pill" id="inputGroupPrepend" style="font-weight: bold; font-style: italic; background: grey !important;">Structure</span>
      <input type="text" name="" class="form-control rounded-pill" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
      Veuillez renseigner le cabinet de formation SVP!
      </div>
    </div>
  </div> -->
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Date (début)</label>
    <input type="date" name="date_debut_formation" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner la date SVP!
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Date (fin)</label>
    <input type="date" name="date_fin_formation" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner la date SVP!
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Heure (début)</label>
    <input type="time" name="heure_debut_formation" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner l'heure SVP!
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom01" class="form-label" style="font-weight: bold;">Heure (fin)</label>
    <input type="time" name="heure_fin_formation" class="form-control rounded-pill" id="validationCustom01" required>
    <div class="invalid-feedback">
      Veuillez renseigner l'heure SVP!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">Lieu</label>
    <input type="text" name="lieu_formation" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner le lieu SVP!
    </div>
  </div>
 

  
 <div class="col-md-8">
    <label for="validationTextarea" class="form-label" style="font-weight: bold;">Nom & Prénom(s) du formateur</label>           

       <select name="nom_prenom_formateur" class="form-select form-select-lg mb-3 rounded-pill" aria-label=".form-select-lg example">
  
      <option  disabled style="font-weight: bold;">S&Eacute;LECTIONNEZ UN FORMATEUR</option>
 <?php while($data=$result->fetch()) {?>
       
        <option value="<?php echo $data['ID_FORMATEUR'];?>">
          <?php echo $data['NOM_PRENOM_FORMATEUR'];?>
      <?php } ?>                
         
        </option>
    </select>   
  </div> 


  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" style="font-weight: bold;">Objectif</label>
    <input type="text" name="libelle_objectif" class="form-control rounded-pill" id="validationCustom02" required>
    <div class="invalid-feedback">
      Veuillez renseigner l'objectif SVP!
    </div>
  </div>
       
  <!-- <div class="mb-3 col-sm-8">
                        <label for="validationTextarea" class="form-label" style="font-weight: bold;">Objectifs</label>
                        <textarea class="form-control rounded-pill" id="validationTextarea" rows="2"  placeholder="Saisissez ici..." required></textarea>
                      
                        <div class="invalid-feedback">
                          Veuillez renseigner vos objectifs svp!
                        </div>
                      </div> -->
                      <!-- <div class="col-sm-4"> <br><br>
                
    <input type="button" class="btn btn-primary btn-sm btn-rounded" value="+" class="add" id="add" style="font-weight: bold; background: rgb(255, 113, 19) !important;"></div>
   <fieldset id="buildyourform">

</fieldset>
<script>$(document).ready(function() {
$("#add").click(function() {
var lastField = $("#buildyourform div:last");
var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
fieldWrapper.data("idx", intId);
var fType = $("<div class=\"mb-3 col-sm-8\"> <textarea class=\"form-control rounded-pill\" id=\"validationTextarea\" rows=\"2\"  placeholder=\"Saisissez ici...\" required></textarea>  <div class=\"invalid-feedback\">Veuillez renseigner vos objectifs svp!</div></div>");

var removeButton = $("<div class=\"col-sm-4\"> <input type=\"button\" class=\"remove btn btn-danger btn-sm btn-rounded\" value=\"-\" style=\"font-weight: bold; background: rgb(255, 0, 0) !important;</div>;\" />");
removeButton.click(function() {
$(this).parent().remove();
});
fieldWrapper.append(fType);
fieldWrapper.append(removeButton);
$("#buildyourform").append(fieldWrapper);
});
$("#preview").click(function() {
$("#yourform").remove();
var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
$("#buildyourform div").each(function() {
var id = "input" + $(this).attr("id").replace("field","");
var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
var input;
switch ($(this).find("select.fieldtype").first().val()) {
case "checkbox":
input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
break;
case "textbox":
input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
break;
case "textarea":
input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
break;    
}
fieldSet.append(label);
fieldSet.append(input);
});
$("body").append(fieldSet);
});
});</script> -->
  <div class="col-12 text-center"> <br>
    <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
    
    <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button><br><br>
  </div>
  
</form>
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-light text-center">R&Eacute;SULTATS</h3>
                            </div>
                            <div class="card-body">
                            <div class="row row-cols-1">
                            <table class="table table-bordered table-sm display table table-striped table-center table-responsive" id="myTab" style="width:100%">
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">TH&Egrave;ME</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE (début)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">DATE (fin)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">HEURE (début)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">HEURE (fin)</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">LIEU</th>
                                  
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">NOM & PR&Eacute;NOM(S) DU FORMATEUR</th>
                                  <th scope="col" style="font-weight: bold; background: rgb(109, 138, 104) !important;" class="text-dark">ACTIONS</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php while ($donnees=$res->fetch()) {
                                      # code...
                                  ?>
                                <tr>
                                  <td><?php 
                                echo $donnees['INTITULE_FORMATION'];
                                  ?></td>
                                  
                                  <td><?php 
                                echo $donnees['DATE_DEBUT_FORMATION'];
                                  ?></td>
                                  <td><?php 
                                echo $donnees['DATE_FIN_FORMATION'];
                                  ?></td>
                                  <td><?php 
                                echo $donnees['HEURE_DEBUT_FORMATION'];
                                  ?></td>
                                  <td><?php 
                                echo $donnees['HEURE_FIN_FORMATION'];
                                  ?></td>
                                  <td><?php 
                                echo $donnees['LIEU_FORMATION'];
                                  ?></td>
                                    <td><?php 
                                echo $donnees['NOM_PRENOM_FORMATEUR'];
                                  ?></td>
                                <td>
                                  <a href="modifier_formation.php?ID=<?php echo $donnees['ID_FORMATION'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(106, 90, 205) !important;" id="tooltips_modifie" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Modifier"><i class="fas fa-edit"></i></button></a>
                                  <a href="supprimer_formation.php?ID=<?php echo $donnees['ID_FORMATION'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(255, 0, 0) !important;" id="tooltips_supprim" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Supprimer"><i class="fas fa-minus"></i></i></button></a>
                                  <a href="ajout_participant_formation.php?ID=<?php echo $donnees['ID_FORMATION'];?>"><button class="btn btn-rounded waves-effect text-light btn-sm" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-plus"  id="tooltips_ajout_participant" data-placement="right" data-mdb-toggle="tooltip" data-mdb-html="true" title="Ajouter un participant à la formation"></i></button></a>
                                </td>
                                </tr>
                                <?php } ?>
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


