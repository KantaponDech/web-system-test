<?php
    session_start();
    include("connect.php");
    include("errors.php");
?>
<!DOCTYPE html>
<html>
     <head>
          <meta charset = "UTF-8">
          <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
          <link rel = "icon" type = "image/png" href = "picture/icon.png">
          <style> <?php include 'style.css'; ?> </style>
          <TiTle>Datalearning</TiTle>
     </head>

     <body>
          <p>Datalearning.tu.ac.th</p>
          <div class="signup-signin">
               <div class = "sign-block">
                    <p id = "title">Sign Up</p>
                    <form action = "signup_db.php" method = "post">
                         <div class = "input-group">
                              <label for = "firstname">Firstname</label>
                              <input type = "text" name = "firstname">
                         </div>
                         <div class = "input-group">
                              <label for = "lastname">Lastname</label>
                              <input type = "text" name = "lastname">
                         </div>
                         <div class = "input-group">
                              <label for = "username">Username</label>
                              <input type = "text" name = "username">
                         </div>
                         <div class = "input-group">
                              <label for = "email">Email</label>
                              <input type = "email" name = "email">
                         </div>
                         <div class = "input-group">
                              <label for = "password_1">Password</label>
                              <input type = "password" name = "password_1">
                         </div>
                         <div class = "input-group">
                              <label for = "password_2">Confirm Password</label>
                              <input type = "password" name = "password_2">
                         </div>
                         <div class = "input-group">
                              <button type = "submit" name = "reg_user" class = "btn">Register</button>
                         </div>
                    </form>
               </div>
               <div class = "sign-block">
                    <p id = "title">Sign In</p>
                    <form action = "signin_db.php" method = "post">
                         <div class = "input-group">
                              <label for = "username">Username</label>
                              <input type = "text" name = "username">
                         </div>
                         <div class = "input-group">
                              <label for = "password">Password</label>
                              <input type = "password" name = "password">
                         </div>
                         <div class = "input-group">
                              <button type = "submit" name = "login_user" class = "btn">Login</button>
                         </div>
                    </form>
                    <p style = "font-size: 24px">Forgot Password? <br> Please contact email xxxxxxxxxxx@gmail.com</p>
               </div>
          </div>
          <?php if (isset($_SESSION['error'])) : ?>
               <div class = "error">
                    <h3>
                         <?php 
                              echo $_SESSION['error'];
                              unset($_SESSION['error']);
                         ?>
                    </h3>
               </div>
          <?php endif ?>
     </body>
</html>