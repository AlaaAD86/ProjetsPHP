 <!-- INSERTING USER SIGNUP INFORMATION USING HTML FORMS AND PHP -->

<?php
    include_once 'dbh.ink.php';


    // FOR SECURITY PURPOSES WE USE MYSQLI_REAL_ESCAPE_STRING FUNCTION
    // TO PROTECT DATA FROM SQL INJECTION

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO allusers (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('?', '?', '?', '?', '?' );";

    // mysqli_query($conn, $sql);

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "sql error";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $mail, $uid, $password);
        mysqli_stmt_execute($stmt);
    }
  
    header("Location: ../index.php?signup=success");

