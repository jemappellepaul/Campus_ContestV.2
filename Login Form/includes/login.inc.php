<?php

session_start();

if(isset($_POST['submit'])){
      include('config.php');

      $username = $_POST['username']; 
      $password = $_POST['password'];
      //Check if empty inputs
      if(empty($username) || empty($password)){
            header('Location: ../login.php?login=empty');
            echo "<p>The fields cannot be empty!</p>";
            exit();
      }else{
            $sql = "SELECT * FROM users WHERE user_username='$username' OR user_email='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                  header('Location: ../login.php?login=error');
                  exit();
            }else{
                  if($row = mysqli_fetch_assoc($result)){
                        //De-Hash password
                        $hashPasswordCheck = password_verify($password,$row['user_password']);
                        if( $hashPasswordCheck == false){
                              header('Location: ../login.php?login=error');
                              exit();
                        }else if($hashPasswordCheck == true){
                              //Log in
                              $_SESSION['u_id'] = $row['user_id'];
                              $_SESSION['u_fname'] = $row['user_fname'];
                              $_SESSION['u_lname'] = $row['user_lname'];
                              $_SESSION['u_email'] = $row['user_email'];
                              $_SESSION['u_username'] = $row['user_username'];
                              header('Location: ../index.php?login=success');
                              exit();
                        }
                  }
            }
      }
      }else{
            header('Location: ../index.php?login=error');
            exit();
      }
?>