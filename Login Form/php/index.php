<?php $title = "Manga ++"; ?>
<?php
include_once("header.php");
?>

      <section class="container">
            <div class="wrapper">
                  <?php

                        if(isset($_SESSION['u_id'])){
                              echo '<h2>Manga ++</h2>';
                              echo "Vous êtes connectés !";
                        }
                  ?>
            </div>
      </section>
<?php

include_once("footer.php");

?>