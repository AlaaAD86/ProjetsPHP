<?php include "../header.php"; ?>

        <!-- PRODUCT STARTS HERE -->

        <div class="container-fluid">
            <div class="row product-sec">
                <div class="col-lg-6 prod-left">
                    <div class="hero-image">
                        <img src="img/rum-1.png" class="img wow fadeInUp" alt="">
                    </div>
                </div>

                <div class="col-lg-6 prod-right">
                    <div class="prod-opt">
                        <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">Pirates Crog No.13
                        </h3>

                        <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">€42.00</p>
                        <br>

                        <input type="number" placeholder="QTE" class="wow fadeInUp" data-wow-delay="0.8s">

                        <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                            <a href="#">Ajouter au Panier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT ENDS HERE -->

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
                    <div class="col-lg-4"></div>

                    <div class="col-lg-2 prod wow fadeInUp" data-wow-delay="0.5s">
                        <a href="product.php">
                            <p id="price">€30.00</p>
                            <img src="<?= IMG_PATH ?>best-1.jpg" alt="">
                            <p id="prod-desc">Lorem ipsum dolor sit amet.</p>
                        </a>
                        <button type="button" class="btn btn-dark">Ajouter au Panier</button>
                    </div>
                    <div class="col-lg-2 prod wow fadeInUp" data-wow-delay="0.8s">
                        <a href="product.php">
                            <p id="price">€32.00</p>
                            <img src="<?= IMG_PATH ?>best-2.jpg" alt="">
                            <p id="prod-desc">Adipisicing elit, Excepturi, provident.</p>
                        </a>
                        <button type="button" class="btn btn-dark">Ajouter au Panier</button>

                    </div>
                    <div class="col-lg-2 prod wow fadeInUp" data-wow-delay="1.1s">
                        <a href="product.html">
                            <p id="price">€86.00</p>
                            <img src="<?= IMG_PATH ?>best-3.jpg" alt="">
                            <p id="prod-desc">Mollitia similique quibusdam.</p>
                        </a>
                        <button type="button" class="btn btn-dark">Ajouter au Panier</button>

                    </div>
                    <div class="col-lg-2 prod wow fadeInUp" data-wow-delay="1.4s">
                        <a href="product.html">
                            <p id="price">€36.00</p>
                            <img src="<?= IMG_PATH ?>best-4.jpg" alt="">
                            <p id="prod-desc">dignissimos a quae reiciendis.</p>
                        </a>
                        <button type="button" class="btn btn-dark">Ajouter au Panier</button>

                    </div>
                </div>
            </div>
        </div>


        <!-- CATEGORIES SECTION ENDS -->

        <div class="whitespaces"></div>


        <?php include "../footer.php"; ?>