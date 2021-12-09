<?php include('config/constants.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocery store </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<header>



    <div class="header">

        <div id="menu-bar" class="fas fa-bars"></div>
        <img src="images/logo.png" class='logoimg' alt="">
        <nav class="navbar">
            <a href="./index.php">home</a>
            <a href="./categories.php">categories</a>
            <a href="./products.php">products</a>
            <a href="#contact ">contact us</a>
        </nav>

        <div class="searchbox">

                <input type="search" id="search-box" placeholder="search items">
                <label for="search-box" class="fas fa-search"></label>

        </div>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>