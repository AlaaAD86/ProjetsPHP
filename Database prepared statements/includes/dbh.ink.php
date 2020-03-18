<!-- CREATE CONNECTION WITH THE DATABASE -->


<?php


$dbServername = "localhost";
$dbUsername = "toto"; 
$dbPassword = "toto";
$dbname = "users";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

