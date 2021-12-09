<?php

session_start();
//to execute query
     //defining constants
     define('SITEURL','http://localhost/groceryPHP-1/');
     define('LOCALHOST','localhost');
     define('DB_USERNAME','root');
     define('DB_PASSWORD','');
     define('DB_NAME','grocery1');
    //by default uname is root and password is blank
    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    //we need to give our db name
    $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

?>