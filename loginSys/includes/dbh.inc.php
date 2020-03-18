<?php

$servername = "localhost";
$dbUserName = "toto";
$dbPassword = "toto";
$dbname = "loginSysTuto";

$conn = mysqli_connect($servername, $dbUserName, $dbPassword, $dbname);

if (!conn){
    die("Connection Failed: ".mysqli_connect_error());
}