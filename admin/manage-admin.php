
<?php include('partials/menu.php');?>


        <div class="main-content">
            <div class="wrapper">
           <h1>ADMIN</h1>
           <br>
        <br>
            <?php if(isset ($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset ($_SESSION['add']);
            }
            if(isset ($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset ($_SESSION['delete']);
               }
             if(isset ($_SESSION['update'])){
                echo $_SESSION['update'];
                unset ($_SESSION['update']);
               }
             if(isset ($_SESSION['user-not-found'])){
                echo $_SESSION['user-not-found'];
                unset ($_SESSION['user-not-found']);
               }
             if(isset ($_SESSION['password-not-match'])){
                echo $_SESSION['password-not-match'];
                unset ($_SESSION['password-not-match']);
               }
             if(isset ($_SESSION['change-pwd'])){
                echo $_SESSION['change-pwd'];
                unset ($_SESSION['change-pwd']);
               }
             if(isset ($_SESSION['login'])){
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
               }
            ?>
            <br>
            <br>
            <br>
           <a href="add-admin.php" class="btn-primary">Add Admin</a>
           <br>
           <br>
               <table class="tbl-full">
                       <tr>
                               <th>S.No</th>
                               <th>Full Name</th>
                               <th>Username</th>
                               <th>Actions</th>
                       </tr>
                <?php
                        $sql='SELECT * FROM  tbl_admin';
                        $res=mysqli_query($conn,$sql);
                        if($res==TRUE){
                                $count=mysqli_num_rows($res);
                                 $sn=1;
                                if($count>0){
                                        while($rows=mysqli_fetch_assoc($res)){
                                                $id=$rows['id'];
                                                $full_name=$rows['fullname'];
                                                $username=$rows['username'];
                                                ?>

                                                <tr>
                                                        <td>
                                                           <?php echo $sn++;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $full_name;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $username;?>
                                                        </td>
                                                        <td colspan="2">
                                                           <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-danger">Change password</a>
                                                           <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a>
                                                           <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>

                                                        </td>
                                                        <td>

                                                        </td>
                                                </tr>
                                                <?php

                                        }
                                }
                                else{
                                        //no data in database
                                }

                        }
                      ?>

               </table>
        </div>
        </div>

<?php include('partials/footer.php');?>
