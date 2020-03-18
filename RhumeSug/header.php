
<?php 
// session_start();
include "config.php";
    include 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RHUME SUG OFFICIAL WEBSITE</title>
    <link rel="stylesheet" href="<?= CSS_PATH ?>">
    <link rel="stylesheet" href="<?= CSS_LOGIN ?>">

    <!-- bootstrapcdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- icon pack -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- tweenmax (greensock) cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- for scroll animations -->
    <link rel="stylesheet" href="<?= CSS_ANIME ?>">
    <script src="<?= WOW_PATH ?>"></script>
</head>

<body>
    <div class="my-container">
           <!-- NAVIGATION STARTS -->
   <div class="nav">
            <div>
           
            </div>
            <div class="menu-open">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="brand">
                <span><a href="home.php"> <img style="width:25%;" src="<?= IMG_PATH ?>logo.png" alt=""></a></span>
            </div>
            <div class="signup">
                <a href="signup.php"><ion-icon name="key"></ion-icon></a>
            </div>
            <div class="login">
                <a href="login.php"><ion-icon name="log-in"></ion-icon></a>
            </div>
            <div class="cart">
                <ion-icon name="cart"></ion-icon>
            </div>
            <div class="menu">
                <div class="menu-close">
                    <ion-icon name="close"></ion-icon>
                </div>
                <ul>
                    <li><a href="home.php"> <img style="width:50%;" src="<?= IMG_PATH ?>logo.png" alt=""></li>
                    <li></li>
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="shop.php">Notre Collection</a></li>
                    <li><a href="product.php">Produits</a></li>
                    <li><a href="about.php">Notre Histoire</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                </ul>
                <div class="media-menu">
                    <ul>
                        <li>
                            <ion-icon name="logo-facebook"></ion-icon>
                        </li>
                        <li>
                            <ion-icon name="logo-instagram"></ion-icon>
                        </li>
                        <li>
                            <ion-icon name="logo-twitter"></ion-icon>
                        </li>
                        <li>
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

<!-- NAVIGATION ENDS -->