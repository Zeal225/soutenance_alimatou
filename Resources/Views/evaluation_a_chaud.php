<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<?php require('../../App/Http/controllers/recup_fonct.php');?>

<?php 
 $resultats=get_info_participation();
?>
<body>
    <!-- Start your project here-->
    <div class="container container-form">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-light"><h3>FICHE D'&Eacute;VALUATION &Agrave; CHAUD</h3></div>
                <div class="card-body">
                <form class="row g-3 needs-validation" action="../../App/Http/controllers/insert_evaluation_ac.php" method="post" novalidate>
                <div class="form-check form-check-inline">
  <table>
  <label class="text-dark" style="font-weight: bold; background: rgb(240, 147, 86) !important;"><h2>&nbsp;Environnement de travail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </h2></label>
  <input type="hidden" name="id_participation" value=" <?php while ($data=$resultats->fetch()) {
                               echo $data['ID_PARTICIPATION'];
                         
                              } ?> ">
    <tr>
      <td>
        <label style="font-weight: bold;">Comment avez-vous trouvé l'accueil ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="accueil_evaluation_ac" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="accueil_evaluation_ac" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="accueil_evaluation_ac" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="accueil_evaluation_ac" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé le(s) lieu(x) de formation <br> (ergonomie, propreté, sonorisation, etc.) ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="lieu_evaluation_ac" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="lieu_evaluation_ac" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="lieu_evaluation_ac" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="lieu_evaluation_ac" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant</label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé les outils et fournitures mis à disposition ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td> <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="outils_fournitures" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="outils_fournitures" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="outils_fournitures" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="outils_fournitures" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  
  </table><br>
  <label class="text-dark" style="font-weight: bold; background: rgb(240, 147, 86) !important;"><h2>&nbsp;Appréciation du contenu de la formation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </h2></label>
  <table>
    <tr>
      <td>
        <label style="font-weight: bold;">Le contenu couvre-t-il vos attentes ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="attentes_contenu" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="attentes_contenu" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="attentes_contenu" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="attentes_contenu" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Le contenu est-il utile pour votre travail ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contenu_utiles_travail" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contenu_utiles_travail" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contenu_utiles_travail" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contenu_utiles_travail" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant</label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé les exercices et exemples ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exercices_exemples" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exercices_exemples" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exercices_exemples" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exercices_exemples" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé la méthode d'enseignement du formateur ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="methode_enseignement" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="methode_enseignement" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="methode_enseignement" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="methode_enseignement" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé les supports de cours et exercices ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="support_cours_exercices" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="support_cours_exercices" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="support_cours_exercices" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="support_cours_exercices" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Comment avez-vous trouvé le rythme de travail ? &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rythme_travail" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rythme_travail" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rythme_travail" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rythme_travail" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  </table><br>
  <label class="text-dark" style="font-weight: bold; background: rgb(240, 147, 86) !important;"><h2>&nbsp;Appréciation du formateur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  </h2></label>
  <table>
    <tr>
      <td>
        <label style="font-weight: bold;">Maîtrise du sujet &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitre_sujet" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitre_sujet" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitre_sujet" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitre_sujet" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Qualité de communication &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="qualite_communication" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="qualite_communication" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="qualite_communication" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="qualite_communication" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant</label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Capacité d'écoute &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="capacite_ecoute" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="capacite_ecoute" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="capacite_ecoute" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="capacite_ecoute" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
  <tr>
      <td><hr>
        <label style="font-weight: bold;">Maîtrise de la méthode du cours &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitrise_cours" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitrise_cours" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitrise_cours" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="maitrise_cours" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>
 
  </table><br>
  <label class="text-dark" style="font-weight: bold; background: rgb(240, 147, 86) !important;"><h2>&nbsp;Appréciation générale &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  </h2></label>
  <table>
    <tr>
      <td><br>
        <label style="font-weight: bold;">Dégré de satisfaction &nbsp;&nbsp;&nbsp;</label>
      </td>
      <td><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="degre_satisfaction" id="exampleRadios1" value="<?php echo $data['ID_CABINET'];?>" required>
          <label class="form-check-label" for="exampleRadios1">Très satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="degre_satisfaction" id="exampleRadios1" value="2" required>
          <label class="form-check-label" for="exampleRadios1">Satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="degre_satisfaction" id="exampleRadios1" value="3" required>
          <label class="form-check-label" for="exampleRadios1">Peu satisfaisant</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="degre_satisfaction" id="exampleRadios1" value="4" required>
          <label class="form-check-label" for="exampleRadios1">Pas du tout satisfaisant </label>
        </div>
      </td>
  </tr>

 
  </table> <br>
                </div>

                  <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(69, 139, 29) !important;"><i class="fas fa-check"></i> Valider</button>
                    
                    <button class="btn btn-primary" type="reset" style="font-weight: bold; background: rgb(172, 73, 8) !important;"><i class="fas fa-ban"></i> Annuler</button>

                    <button class="btn btn-primary" type="submit" style="font-weight: bold; background: rgb(121, 37, 255) !important;"><i class="fas fa-print"></i> Imprimer</button>
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
})();</script>
</body>

</html>