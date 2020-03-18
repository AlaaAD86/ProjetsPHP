<?php    
        session_start();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SESSIONS</title>
</head>
<body>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

    <?php
        $_SESSION['username'] = 'marco1234';
        echo $_SESSION['username'];

           if (!isset($_SESSION['username'])){
        echo "you are logged in";
    } else {
        echo "you are logged out";
    }
    ?>

 

</body>
</html>