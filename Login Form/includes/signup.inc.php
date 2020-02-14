<?php
if(isset($_POST['submit'])){

      include_once 'config.php';

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      //Check for empty fields
      if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password)){
            header('Location: ../signup.php?signup=empty');
            exit();
      }else{
            if(!preg_match("/^[a-zA-Zα-ωΑ-Ω ]*$/",$fname) || !preg_match("/^[a-zA-Zα-ωΑ-Ω ]*$/",$lname
             ) || !preg_match("/^[a-zA-Z]*$/",$username)){
                  header('Location: ../signup.php?signup=invalid');
                  exit();
            }else{
                  if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
                        header('Location: ../signup.php?signup=email');
                        exit();
                  }else{
                        $sql = "SELECT * FROM users WHERE user_username='$username'";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0){
                              header('Location: ../signup.php?signup=usertaken');
                              exit();
                        }else{
                              //Hash password
                              $password_hash = password_hash($password,PASSWORD_DEFAULT);
                              //Insert user into the database
                              $sql = $conn ->prepare("INSERT INTO users (user_fname,user_lname,user_email,user_username,user_password) VALUES (?,?,?,?,?)");
                              $sql->bind_param("sssss",$fname,$lname,$email,$username, $password_hash);
                              $sql->execute();
                              header('Location: ../signup.php?signup=success');
                              exit();
                        }
                  }
            }
      }
}else{
      header('Location: ../signup.php');
      exit();
}
?>