<?php

if (isset($_POST['signup-submit'])){

    require "dbh.inc.php";

    $username = $_POST['uid'];
    $mail = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];



    if (empty($username) || empty($mail) || empty($password) || empty($passwordRepeat)){
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$mail); 
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmails&uid"); 
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmails&uid=".$username); 
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduids&mail=".$mail); 
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$mail); 
        exit();
    } else {
        // check if th e username already exists in the database
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; // never use $username when trying to match an entry with db
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror"); 
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: ../signup.php?error=usertaken&mail=".$mail); 
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror"); 
                    exit();
                } else {

                    $hashdPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $mail, $hashdPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success"); 
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn); //closing connection with database

}

else {
    header("Location: ../signup.php");
    exit();
}
// 1:07:43 https://www.youtube.com/watch?v=LC9GaXkdxF8