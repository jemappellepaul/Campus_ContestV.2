<?php $title = "Forgot Password"; ?>
<?php
include_once("header.php");
?>
<?php
     
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;

      if(isset($_POST['submit'])){

            include_once('includes/config.php');

            $email= $_POST['email'];
            if(empty($email)){
                  header('Location: forgotpassword.php?email=empty');
                  exit();
            }else{
                  if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
                        header('Location: forgotpassword.php?email=invalid');
                        exit();
                  }else{
            $sql = "SELECT user_id FROM users WHERE user_email='$email'";
            $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^*(){}";
                        $characters = str_shuffle($characters);
                        $characters = substr($characters, 0, 10);
                        
                     $conn->query("UPDATE users SET user_token='$characters',user_tokenExpire=DATE_ADD(NOW(),INTERVAL 5 MINUTE) WHERE user_email='$email'");
                        require 'PHPMailer/src/Exception.php';
                        require 'PHPMailer/src/PHPMailer.php';
                        require 'PHPMailer/src/SMTP.php';

                        $mail = new PHPMailer;
                        $mail -> isSMTP();
                        $mail -> SMTPDebug=0;
                        $mail -> Host = "titan.indns.gr";
                        $mail -> Port = 465;
                        $mail -> SMTPAuth = true; 
                        $mail -> SMTPSecure = true;
                        $mail -> Username = "info@webstartup.gr"; 
                        $mail -> Password = "saeprojects2018@@";
                        $mail -> setFrom("info@webstartup.gr","Info - Webstartup");
                        $mail -> AddAddress($email);
                        $mail -> Subject="<h2>You have request to reset your password</h2>";
                        $mail -> msgHTML("<h2>Hi,<br/><br/>
                        in order to reset your password, please click on the link below:<br/>
                        <a href='localhost/LoginRegistration%20Form/resetpassword.php?email=$email&token=$characters'>localhost/LoginRegistration%20Form/resetpassword.php?email=$email&token=$characters</a><br/><br/>
                        
                        Kind regards,<br/>
                        Digital Library</h2>");
                        if(!$mail->send()){
                              echo "Mailer error: ".$mail->ErrorInfo;
                        }else{
                              echo "ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΕΠΙΚΟΙΝΩΝΙΑ";
                        }
                        header('Location: forgotpassword.php?reset=success');
                        exit();
            }else{
                  header('Location: forgotpassword.php?email=error');
                  exit();
      }
      }
}
}
?>

      <section class="container">
            <div class="wrapper">
                  <h5>To reset your password, enter the email address you use to sign in to Digital Library</h5>
                  <form class="forms" name="myForm" action="#" method="POST">
                        <input type="text" name="email" placeholder="E-mail">
                        <p class="color" id="resultemail"></p>
                        <button type="submit" name="submit">Reset Password</button>
                        <a href="login.php">Back to Login</a>
                  </form>
            </div>
      </section>
<?php

include_once("footer.php");

?>