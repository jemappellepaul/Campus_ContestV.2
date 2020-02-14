<?php $title = "S'inscrire"; ?>
<?php
include_once("header.php");
?>
      <section class="container">
            <div class="wrapper">
                  <h2>S'inscrire</h2>
                  <form class="forms" name="myForm" action="includes/signup.inc.php" method="POST">
                        <input type="text" onkeyup="usernameValidation()" name="usn" placeholder="Nom d'Utilisateur">
                        <p class="color" id="resultusername"></p>
                        <input type="password" onkeyup="passwordValidation()" name="password" placeholder="Mot de passe">
                        <p class="color" id="resultpassword"></p>
                        <input type="text" onkeyup="fnameValidation()" name="prenom" placeholder="Prénom">
                        <p class="color" id="resultname"></p>
                        <input type="text" onkeyup="snmValidation()" name="nom" placeholder="Nom">
                        <p class="color" id="resultsname"></p>
                        <input type="text" onkeyup="emailValidation()" name="email" placeholder="E-mail">
                        <p class="color" id="resultemail"></p>
                        <button type="submit" name="confirmer">S'inscrire</button>
                  </form>
            </div>
      </section>
<?php

include_once("footer.php");

?>