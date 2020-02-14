<?php $title = "Se connecter"; ?>
<?php
include_once("header.php");
?>

      <section class="container">
            <div class="wrapper">
                  <h2>Se connecter</h2>
                  <form class="forms" name="myForm" action="includes/login.inc.php" method="POST">
                        <input type="text" name="username" placeholder="Nom d'utilisateur ou E-mail">
                        <p class="color" id="resultusername"></p>
                        <input type="password" name="password" placeholder="Mot de passe">
                        <p class="color" id="resultpassword"></p>
                        <button type="submit" name="confirmer">Se connecter</button>
                        <a href="forgotpassword.php">Mot de passe oublié ?</a>
                  </form>
            </div>
      </section>
<?php

include_once("footer.php");

?>