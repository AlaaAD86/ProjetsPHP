<?php
// var_dump($_POST);


if(isset($_POST['submit'])){
    $uid = $_POST['uid'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $c_email = $_POST['c_email'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp'];
    $c_mdp = $_POST['c_mdp'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $pays = $_POST['pays'];
    $check = isset($_POST['checked']);

    if (empty($uid) ||
        empty($nom) || 
        empty($prenom) || 
        empty($email) || 
        empty($c_email) || 
        empty($tel) || 
        empty($mdp) || 
        empty($c_mdp) || 
        empty($check))
    {
        header("Location: ../pages/signup.php?error=emptyfield&nom=".$nom."&prenom=".$prenom."&email=".$email."&c_email=".$c_email."&adresse=".$adresse."&uid=".$uid);
        exit();
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        header("Location: ../pages/signup.php?error=invalidmail&uid");
        exit();
    } 
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/signup.php?error=invalidEmails&nom=".$nom."&prenom=".$prenom."&email=".$email."&adresse=".$adresse); 
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z]*$/", $uid)){
        header("Location: ../pages/signup.php?error=invaliduids&email=".$email); 
        exit();
    }
    elseif ($mdp != $c_mdp){
        header("Location: ../pages/signup.php?error=motDePassepasCorrect=".$uid."&nom=".$nom."&prenom=".$prenom."&email=".$email."&adresse=".$adresse);
        exit();
    }
    elseif ($email != $c_email){
        header("Location: ../pages/signup.php?error=emailpasCorrect=".$uid."&nom=".$nom."&prenom=".$prenom."&adresse=".$adresse);
        exit();
    }
    
    else {
        $db = new Dbh();
        // $passwordHash = password_hash($mdp, PASSWORD_BCRYPT, array("cost" => 12));
        // $hashdPwd = password_hash($mdp, PASSWORD_DEFAULT);


        // var_dump($db);
        // echo "ok";
        // $sql = "SELECT uid FROM Client uid=?"; // TESTER SI LE 'uid' EXISTE DEJA DANS LA BASE DE DONNEE
        $query = $db->conn->prepare("INSERT INTO Client(uid, nom, prenom, tel, email, mdp, adresse, ville, code_postal, pays) 
        VALUES (:uid, :nom, :prenom, :tel, :email, :mdp, :adresse, :ville, :cp, :pays)");
        // var_dump($query);
        // var_dump(intval($cp));


        $query->bindParam(':uid', $uid);
        $query->bindParam(':nom', $nom);
        $query->bindParam(':prenom', $prenom);
        $query->bindParam(':tel', $tel);
        $query->bindParam(':email', $email);
        $query->bindParam(':mdp', $mdp);
        $query->bindParam(':adresse', $adresse);
        $query->bindParam(':ville', $ville);
        $query->bindParam(':cp', (intval($cp)));
        $query->bindParam(':pays', $pays);

        $query->execute();
        header("Location: ../pages/home.php?error=success");
        echo "New records created successfully";
    }

}
