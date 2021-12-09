
<?php

include('../config/constants.php');
include('logincheck.php');
?>
<html>
    <head>
        <title>grocery store admin</title>
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>

        <div class="menu text-center">
        <nav class="navbar">
<ul>
           <li> <a href="index.php">Home</a></li>
            <li><a href="manage-admin.php">Admin</a></li>
            <li><a href="manage-category.php">Category</a></li>
           <li><a href="manage-item.php">Items</a></li>
           <li> <a href="manage-order.php">Order</a></li>
           <li> <a href="logout.php">Logout</a></li>
</ul>
        </nav>
        </div>
