<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $title;?></title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      
</head>
<body>
      <header>
            <nav>
                  <div class="wrapper">
                        <ul>
                              <li><a href="index.php"><h2>Manga ++</h2></a></li>
                        </ul>
                        <div class="login">
                              <?php
                                    if(isset($_SESSION['u_id'])){
                                    echo     '<form action="includes/logout.inc.php" method="POST">
                                                       <button type="submit" name="submit">Logout</button>
                                                 </form>';
                                    }else{
                                         echo   '<a href="login.php">Connexion</a>
                                                    <a href="signup.php">Inscription</a>';
                                    }
                              ?>
                              
                        </div>
                  </div>
            </nav>
      </header>

      