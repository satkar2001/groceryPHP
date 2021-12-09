<<<<<<< HEAD:index.php
<?php include("front-end-partials/menu.php")?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>grocery store </title>
 main


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<header>



    <div class="header">

        <div id="menu-bar" class="fas fa-bars"></div>
        <img src="images/logo.png" class='logoimg' alt="">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="./categories.html">categories</a>
            <a href="./products.html">products</a>
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
>>>>>>> 33b0179299ff7e1b053578eb20a5bb7ffeb09f96:index.html

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/shopping.png" class="shopcart" alt="">
    </div>

    <div class="content">
        <h4>Get all your groceries
            delivered at your doorstep
        </h4>
    </div>

</section>

<!-- home section ends -->

<!-- services section -->

<section class="section1 services">
    <div class="service-center container">
      <div class="service">
        <span class="icon"><i class="bx bx-purchase-tag"></i></span>
        <h4>Free Delivery</h4>
        <span class="text">For any amount </span>
      </div>

      <div class="service">
        <span class="icon"><i class="bx bx-gift"></i></span>
        <h4>Secure online Payment</h4>
        <span class="text">cash on delivery also available</span>
      </div>
      <div class="service">
        <span class="icon"><i class="bx bx-headphone"></i></span>
        <h4>24/7 Support</h4>
        <span class="text">Call us any time </span>
      </div>
    </div>
  </section>


<!-- categories  -->
<section class="section collection">
 <div class="title">
    <h1 class="heading"><span>Featured categories</span></h1>
<!-- CAtegories Section Starts Here -->
<section class="categories">
        <div class="container">
            <div class="clearfix"></div>
        </div>
    </section>




 </div>
 
                                

                               
  <div class="collection-layout container">
      <div class="collection-item">
          <img src="images/fruitscategory.png" alt="">
          <div class="collection-content">
              <h3>fruits and vegetables</h3>
              <a href="fruitsvegcategory.html">shop now</a>
          </div>
      </div>
      <div class="collection-item">
          <img src="images/dairycategory.png" alt="">
          <div class="collection-content">
              <h3>dairy</h3>
              <a href="dairycategory.html">shop now</a>
          </div>
      </div>
      <div class="collection-item">
          <img src="images/bakeryitems.png" alt="">
          <div class="collection-content">
              <h3>bakery</h3>
              <a href="bakerycategory.html">shop now</a>
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


<!-- categories end -->

<!-- featured section -->

 <div class="container">
    <h1 class="heading"><span>Featured Products </span></h1>
     <div class="grid">
         <article>
             <img src="./images/saffola.png" alt="">
             <div class="text">
                 <h3>saffola cooking oil 1ltr</h3>
                 <p>Rs.150</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/apple.png" alt="">
             <div class="text">
                 <h3>apple</h3>
                 <p>Rs 250 per kg</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/pepsi (1).png" alt="">
             <div class="text">
                 <h3>pepsi 250ml</h3>
                 <p>Rs.45</p>
                 <a href="pepsi.html"><button >add to cart</button></a>
             </div>
         </article>
         <article>
             <img src="./images/salt.png" alt="">
             <div class="text">
                 <h3>tata salt 1kg</h3>
                 <p>Rs.25</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/garam-masala.png" alt="">
             <div class="text">
                 <h3>century garam masala</h3>
                 <p>Rs.50</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/kiwi.png" alt="">
             <div class="text">
                 <h3>kiwi</h3>
                 <p>Rs.300 per kg</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/marie.png" alt="">
             <div class="text">
                 <h3>marie gold biscuit</h3>
                 <p>Rs.50</p>
                 <button>add to cart</button>
             </div>
         </article>
         <article>
             <img src="./images/goodday.png" alt="">
             <div class="text">
                 <h3>britannia goodday biscuit </h3>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, aliquid.</p>
                 <button>add to cart</button>
             </div>
         </article>
     </div>
 </div>


<!-- featured section -->







<!-- footer section starts  -->

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

<!-- footer section ends -->












<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>