<?php
    include 'includes/dbh.inc.php';
    include 'includes/user.inc.php';
    include 'includes/viewuser.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB_CONNEXION</title>
</head>
<body>
    
    <?php
        // $usr = new ViewUser();
        // $usr->showAllUsers();

        // pour verfier quel type de drivers de php
        // print_r(PDO::getAvailableDrivers());

        $object = new Dbh;
        $object->connect();
    ?>






</body>
</html>