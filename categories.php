<?php include("front-end-partials/menu.php")?>
    <section class="section collection">
        <div class="title">
           <h1 class="heading"><span>All categories</span></h1>
        </div>
         <div class="collection-layout container">
             <div class="collection-item">
                 <img src="images/fruitscategory.png" alt="">
                 <div class="collection-content">
                     <h3>fruits and vegetables</h3>
                     <a href="fruitsvegcategory.php">shop now</a>
                 </div>
             </div>
             <div class="collection-item">
                 <img src="images/dairycategory.png" alt="">
                 <div class="collection-content">
                     <h3>dairy</h3>
                     <a href="dairycategory.php">shop now</a>
                 </div>
             </div>
             <div class="collection-item">
                 <img src="images/bakeryitems.png" alt="">
                 <div class="collection-content">
                     <h3>bakery</h3>
                     <a href="bakerycategory.php">shop now</a>
                 </div>
             </div>
             <div class="collection-item">
                 <img src="images/spicecategory.jpg" alt="">
                 <div class="collection-content">
                     <h3>salts and spices</h3>
                     <a href="saltspicecategory.php">shop now</a>
                 </div>
             </div>
             <div class="collection-item">
                <img src="images/meatandeggs (1).png" alt="">
                <div class="collection-content">
                    <h3>meat and eggs</h3>
                    <a href="meatsandeggs.php">shop now</a>
                </div>
            </div>
             <div class="collection-item">
                <img src="images/selfcare (1).png" alt="">
                <div class="collection-content">
                    <h3>personal care</h3>
                    <a href="personalcare.php">shop now</a>
                </div>
            </div>
             <div class="collection-item">
                <img src="images/grains-removebg-preview.png" alt="">
                <div class="collection-content">
                    <h3>grains and pulses</h3>
                    <a href="grainsandpulses.php">shop now</a>
                </div>
            </div>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <div class="collection-layout container">
                          <div class="collection-item">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="">
                                        <?php
                                    }
                                ?>
                                <div class="collection-content">
                            
                                <h3><?php echo $title; ?></h3>
                                 <a href="<?php echo SITEURL; ?>categories.php?category_id=<?php echo $id; ?>">shop now</a>
                                 </div>
                                 </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>

         </div>
       </section>


       <footer>
        <div class="footer-content">
            <h2><img src="./images/logo.png" class="footimg" alt=""></h2>
            <p>get all your grocery supplies at your doorstep</p>
            <h3>connect with us</h3>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> </a></li>

            </ul>
        </div>

    </footer>
       <script src="js/script.js"></script>

</body>
</html>