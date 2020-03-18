

<?php 
    session_start();
    header("Location: pages/home.php"); 

    require "config.php";
    include "header.php";
    include 'includes/dbh.inc.php';


    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(array_key_exists($_GET['page'], file)){
            include url.$_GET['page']. 'php';
        }
    } else {
        include "pages/home.php";
    }

?>