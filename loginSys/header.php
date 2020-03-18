<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN SYSTEM</title>
</head>

<body>


    <header>

        <nav>
            <a href="#">
                <img src="img/logo.png" alt="">
            </a>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div class="forms">

            <form class="formOne" action="includes/login.inc.php" method="post">

                <input type="text" name="mailuid" placeholder="username">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="login-submit">Login</button>

            </form>
            <div class="signuplink">
                <a href="signup.php" class="link">Sign Up</a>
            </div>

            <form class="formTwo"  action="includes/logout.inc.php" method="post">

                <button type="submit" name="logout-submit">LogOut</button>

            </form>

        </div>

    </header>