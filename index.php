<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "Sign In First";
        header('location: signup_signin.php');
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: signup_signin.php');
    }
?>
<!DOCTYPE HTML>
<html>
     <head>
          <meta charset = "UTF-8">
          <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
          <style> <?php include 'style.css'; ?> </style>
          <link rel = "icon" type = "image/png" href = "picture/icon.png">
          <title>Learning Data structure and Algorithms</title>
     </head>

     <body>
          <div class = "header">
               <a href = "index.php">Home</a>
               <div class = "learn">
                    <span class = "learn-button">Learn</span>
                    <div class = "learn-menu">
                         <a href = "learning/stack.php">Stack</a>
                         <a href = "learning/queue.php">Queue</a>
                         <a href = "learning/linkedlist.php">Linked List</a>
                         <a href = "learning/binarysearch.php">Binary Search</a>
                    </div>
               </div>
               <a href = "aboutus.php">About Us</a>
               <a href = "signout.php ? logout = '1'">Logout</a>
          </div>
          
          <p id = "title">Learn Data Structure and Algorithms with <br> datalearning.tu.ac.th by take some quiz.</p>

          <div class = "content">
               <p>Data Structure</p>
               <div class = "row">
                    <div class = "column">
                         <p>Stack<br><a href = "learning/stack.php"><img src = "picture/Stack.png"></a></p>
                         <p>Queue<br><a href = "learning/queue.php"><img src = "picture/Queue.png"></a></p>
                    </div>
                    <div class = "column">
                         <p>Binary Tree<br><img src = "picture/Binary Tree.png"></a><br>Coming soon...</p>
                         <p>Linked List<br><a href = "learning/linkedlist.php"><img src = "picture/Linked List.png"></a></p>
                    </div>
               </div>
               <p id = "contenthead">Algorithms</p>
               <div class = "row">
                    <div class = "column">
                         <p>Binary Search<br><a href = "learning/binarysearch.php"><img src = "picture/Binary Search.png"></a></p>
                         <p>Selection Sort<br><img src = "picture/Selection Sort.png"></a><br>Coming soon...</p>
                    </div>
                    <div class = "column">
                         <p>Linear Search<br><img src = "picture/Linear Search.png"></a><br>Coming soon...</p>
                         <p>Bubble Sort<br><img src = "picture/Bubble Sort.png"></a><br>Coming soon...</p>
                    </div>
               </div>
          </div>
     </body>
</html>