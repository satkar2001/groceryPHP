<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>
            Add Admin
        </h1>
        <br>
        <?php if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset ($_SESSION['add']);
            }?>

            <br><br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name" placeholder="enter your name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="your username"></td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="your password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>








<?php include('partials/footer.php');?>
<?php
if(isset($_POST['submit'])){
    $full_name=;$_POST['name']
     $username=$_POST['username'];
    $password=md5($_POST['password']);



    //to insert to sql table

    $sql="INSERT into tbl_admin SET
    fullname='$full_name',
    username='$username',
    password='$password'
    ";

    $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    //to check if query is properly executed or not

    if($res==TRUE){

        $_SESSION['add']="<div class='success'>Admin added successfully</div>";
          //redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else{
        //  echo "failed to insert data";
        $_SESSION['add']="<div class='error'>Failed to  add Admin</div> ";
          //redirect to manage admin page
        header('location:'.SITEURL.'admin/add-admin.php');
    }
}
?>