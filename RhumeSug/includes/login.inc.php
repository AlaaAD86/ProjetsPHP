<?php


// session_start();

$loginDB = new Dbh();

if(isset($_POST['submit'])){
    //Retrieve the field values from our login form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $mdp = !empty($_POST['mdp']) ? trim($_POST['mdp']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT * FROM Client WHERE email = :email";
    $stmt = $loginDB->conn->prepare($sql);

    //Bind value.
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    var_dump($user);

    if ($user) {
        if($_SESSION){
        $_SESSION['user_id'] = $user->uid;
    }
}

    // CHECK IF ROW IS FALSE - DOES NOT EXIST
    if($user == false){
        die ('INNCORECT EMAIL OR PASSWORD');
    } else {
        // User exist. Check if given pwd matches pwd in db
        $validPwd = password_verify($mdp, $user['mdp']);

        if($validPwd){
            $_SESSION['user_id'] = $user['nom'];
            $_SESSION['logged_in'] = time();

            //Redirect to our protected page, which we called home.php
            header('Location: index.php?page=home');
            exit;
        } else {
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
            echo 'not correct';
        }
    }
}



