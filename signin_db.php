<?php 
     session_start();
     include("connect.php");

     $errors = array();

     if(isset($_POST["login_user"])){
          $username = mysqli_real_escape_string($CONNECT, $_POST["username"]);
          $password = mysqli_real_escape_string($CONNECT, $_POST["password"]);

          if(empty($username)){
               array_push($errors, "Username is required");
               $_SESSION["error"] = "Username is required";
          }
          if(empty($password)){
               array_push($errors, "Password is required");
               $_SESSION["error"] = "Password is required";
          }
          if(empty($username) && empty($password)){
               array_push($errors, "Username and Password is required");
               $_SESSION["error"] = "Username and Password is required";
          }

          if(count($errors) == 0){
               $password = md5($password);
               $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
               $result = mysqli_query($CONNECT, $query);

               if(mysqli_num_rows($result) == 1){
                    $_SESSION["username"] = $username;
                    $_SESSION["success"] = "Your are now logged in";
                    header("location: index.php");
               }
               else{
                    array_push($errors, "Wrong Username or Password");
                    $_SESSION["error"] = "Wrong Username or Password!";
                    header("location: signup_signin.php");
               }
          }
          else{
               header("location: signup_signin.php");
          }
     }
?>