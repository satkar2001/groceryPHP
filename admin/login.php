
<?php include('../config/constants.php');?>
<html>
    <head>
        <title>login-grocery website</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">login</h1>
            <br>
            <?php
            if(isset ($_SESSION['login'])){
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
               }
             if(isset($_SESSION['no-login-message']))
             {
                 echo $_SESSION['no-login-message'];
                 unset ($_SESSION['no-login-message']);
             }
               ?>
               <br><br>
            <form action="" method="POST" class="text-center">
             username: <br>
             <input type="text" name="username" placeholder="enter the username"><br><br>
             password: <br>
             <input type="password" name="password" placeholder="enter the password"><br><br>
             <input type="submit" name="submit" value="login" class="btn-primary">
             <br><br>
            </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    //getting data from form
     $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    $res=mysqli_query($conn,$sql);


    $count=mysqli_num_rows($res);

    if($count==1){
        $_SESSION['login']="<div class='success'>login successful</div>";
        $_SESSION['user']=$username;
        //redirect to manage admin page
      header('location:'.SITEURL.'admin/');
    }
    else{
        $_SESSION['login']="<div class='error'> login failed</div>";
        //redirect to manage admin page
      header('location:'.SITEURL.'admin/login.php');
    }
}


?>