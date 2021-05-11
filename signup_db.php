<?php 
     session_start();
     include("connect.php");

     $errors = array();

     if(isset($_POST["reg_user"])){
          $firstname = mysqli_real_escape_string($CONNECT, $_POST["firstname"]);
          $lastname = mysqli_real_escape_string($CONNECT, $_POST["lastname"]);
          $username = mysqli_real_escape_string($CONNECT, $_POST["username"]);
          $email = mysqli_real_escape_string($CONNECT, $_POST["email"]);
          $password_1 = mysqli_real_escape_string($CONNECT, $_POST["password_1"]);
          $password_2 = mysqli_real_escape_string($CONNECT, $_POST["password_2"]);
          
          if(empty($firstname)){
               array_push($errors, "Firstname is required");
               $_SESSION["error"] = "Firstname is required";
          }
          if(empty($lastname)){
               array_push($errors, "Lastname is required");
               $_SESSION["error"] = "Lastname is required";
          }
          if(empty($username)){
               array_push($errors, "Username is required");
               $_SESSION["error"] = "Username is required";
          }
          if(empty($email)){
               array_push($errors, "Email is required");
               $_SESSION["error"] = "Email is required";
          }
          if(empty($password_1)){
               array_push($errors, "Password is required");
               $_SESSION["error"] = "Password is required";
          }
          if($password_1 != $password_2){
               array_push($errors, "The two passwords do not match");
               $_SESSION["error"] = "The two passwords do not match";
          }

          $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
          $query = mysqli_query($CONNECT, $user_check_query);
          $result = mysqli_fetch_assoc($query);

          if($result){ // if user exists
               if($result["username"] === $username){
                    array_push($errors, "Username already exists");
                    $_SESSION["error"] = "Username already exists";
               }
               if($result["email"] === $email){
                    array_push($errors, "Email already exists");
                    $_SESSION["error"] = "Email already exists";
               }
          }

          if(count($errors) == 0){
               $password = md5($password_1);

               $sql = "INSERT INTO user (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
               mysqli_query($CONNECT, $sql);

               $_SESSION["username"] = $username;
               $_SESSION["success"] = "You are now logged in";
               header("location: index.php");
          }
          else{
               header("location: signup_signin.php");
          }
     }
?>