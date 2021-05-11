<?php
     $SERVERNAME = "localhost";
     $USERNAME = "root";
     $PASSWORD = "";
     $DATABASE = "learn_db";

     $CONNECT = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

     if(!$CONNECT){
          die("Connecting Failed. . . ".mysqli_connect_error());
     }
?>