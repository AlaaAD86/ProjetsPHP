

    <?php include "../header.php"; ?>

     <?php
        // Start the session.
        // session_start();

        //  Check if the user is logged in.
        if(!isset($_SESSION['user_id']) || (!isset($_SESSION['logged_in'])){
           //User not logged in. Redirect them back to the login.php page.
        //    echo '<h1>Welcome '.$_SESSION['user_id'].'</h1>';
        //    var_dump($_SESSION);
           echo '<h4><a href="logout.php">Logout</a></h4>';
         } else { 
           header('location:index.php');
         }
         
        // Print out something that only logged in users can see.

        echo 'Congratulations! You are logged in!';
     ?>

        <!-- HOME SECTION STARTS -->

        <div class="hero-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 hero-left">
                        <div class="tagline">
                            <p class="wow fadeInUp">The multicoloured tapestry of rum styles
                                <br> is as rich as the history and culture
                                <br> that encircles this great spirit.
                            </p>
                        </div>

                        <div class="shipping">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">livraison gratuite à partir de €150+
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 hero-right">
                        <div class="hero-image">
                            <img src="<?= IMG_PATH ?>rum-intro.jpg" class="img wow fadeInUp" data-wow-delay="0.3s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HERO SECTION ENDS -->

        <!-- PRODUCT LIST STARTS -->

        <div class="section prod-list">
            <div class="container-fluid">
                <div class="row some-cards">
                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                        <a href="product.html">
                            <p id="price">€42.00</p>
                            <img src="<?= IMG_PATH ?>rum-1.png" alt="">
                            <p id="prod-desc">Pirate's Grog No.13 Batch Four is the brand new bolder blend with an equally exquisite taste as Batch One, Two & Three.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                        <a href="product.html">
                            <p id="price">€36.00</p>
                            <img src="<?= IMG_PATH ?>rum-2.jpg" alt="">
                            <p id="prod-desc">Pirate’s Grog Black Ei8ht Coffee Rum is created by infusing premium Brazilian coffee with the incredibly smooth Pirate’s Grog Five Year aged rum.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                        <a href="product.html">
                            <p id="price">€39.99</p>
                            <img src="<?= IMG_PATH ?>rum-3.jpg" alt="">
                            <p id="prod-desc">The rum is aged in white American oak, bourbon barrels for five years before being blended in small batches. </p>
                        </a>
                    </div>
                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                        <a href="product.html">
                            <p id="price">€62.00</p>
                            <img src="<?= IMG_PATH ?>rum-4.jpg" alt="">
                            <p id="prod-desc">Pirate's Grog Spiced is a salty caramel infusion with allspice and our secret ingredient, found along the enchanting shores of Roatan, Honduras.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT LIST ENDS -->

        <!-- BANNER SECTION STARTS -->

        <div class="row prod-sec">
            <div class="col-lg-6 prod-img">
                <img src="<?= IMG_PATH ?>rum-story.jpg" alt="">
            </div>

            <div class="col-lg-4 prod-desc">
                <br><br>
                <p class="wow fadeInUp" data-wow-delay="0.5s">The way to get started is to quit talking and begin doing. Get started with our spirits and boost your productivity.</p>

                <div class="link wow fadeInUp" data-wow-delay="0.6s">
                    <a href="shop.php">Achetez <ion-icon name="arrow-round-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <!-- BANNER SECTION ENDS -->

        <!-- CATEGORIES SECTION STARTS -->

        <div class="container-fluid">
            <div class="row section shop">
                <div class="col-lg-8">
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Rum lovers around the world owe a great debt to a simple plant: sugar cane. Hundreds of years ago, there was a sugar craze in Europe, and colonies were established around the Caribbean to make the sweet commodity. </p>

                    <div class="link wow fadeInUp" data-wow-delay="0.6s">
                        <a href="shop.php">En Savoir Plus <ion-icon name="arrow-round-forward"></ion-icon></a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row some-cards">
                    <div class="col-lg-3"></div>

                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= IMG_PATH ?>col-1.jpg" alt="">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla illum!
                        </p>
                    </div>

                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                        <img src="<?= IMG_PATH ?>col-2.jpg" alt="">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla illum!
                        </p>
                    </div>

                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.7s">
                        <img src="<?= IMG_PATH ?>col-3.jpg" alt="">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla illum!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CATEGORIES SECTION ENDS -->

 

        <?php include "../footer.php"; ?>
