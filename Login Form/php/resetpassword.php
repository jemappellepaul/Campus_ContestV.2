<?php
      if(isset($_GET['email']) && isset($_GET['token'])){
            include_once('includes/config.php');

            $email= $_GET['email'];
            $token= $_GET['token'];

            $sql = "SELECT user_id FROM users WHERE user_email='$email' AND user_token='$token' AND user_token<>' ' AND user_tokenExpire > NOW()";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                $newpassword = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^*(){}";
                $newpassword = str_shuffle($newpassword);
                $newpassword = substr($newpassword, 0, 10);

                $newpassword_hash = password_hash($newpassword,PASSWORD_DEFAULT);
                $conn->query("UPDATE users SET user_token='', user_password = '$newpassword_hash' WHERE user_email='$email' ");
                echo "Your new password is :" .$newpassword."<br/>".
                "<a href='login.php'>Click Here to Login<a/>";
            } else {
                  header('Location : login.php');
            exit();
            }
      } else{
            header('Location : login.php');
            exit();
      }

?>