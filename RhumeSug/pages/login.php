<?php 


    include "../header.php"; 
    include "../includes/login.inc.php"; 

?>

<?php



// $loginDB = new Dbh();

// if(isset($_POST['submit'])){
//     //Retrieve the field values from our login form.
//     $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
//     $mdp = !empty($_POST['mdp']) ? trim($_POST['mdp']) : null;

//     //Retrieve the user account information for the given username.
//     $sql = "SELECT * FROM Client WHERE email = :email";
//     $stmt = $loginDB->conn->prepare($sql);

//     //Bind value.
//     $stmt->bindValue(':email', $email);
//     $stmt->execute();

//     //Fetch row.
//     $user = $stmt->fetch(PDO::FETCH_OBJ);
//     var_dump($user);

   
//     $_SESSION['userID'] = $user->uid;
    // var_dump($_SESSION['userID']);


    //CHECK IF ROW IS FALSE - DOES NOT EXIST
    // if($user == false){
    //     die ('INNCORECT EMAIL OR PASSWORD');
    // } else {
    //     // User exist. Check if given pwd matches pwd in db
    //     $validPwd = password_verify($mdp, $user['mdp']);

    //     if($validPwd){
    //         $_SESSION['user_id'] = $user['nom'];
    //         $_SESSION['logged_in'] = time();

    //         //Redirect to our protected page, which we called home.php
    //         header('Location: index.php?page=home');
    //         exit;
    //     } else {
    //         //$validPassword was FALSE. Passwords do not match.
    //         die('Incorrect username / password combination!');
    //         echo 'not correct';
    //     }
    // }
// }

?>


<div class="about-hero">
    <div class="container-fluid hero signup-form wow fadeInUp">

        <h1 id="hero-title">- Se Connecter -<br> Rhuma Sug</h1>
        <img src="../img/logo.png" alt=""></<img>

    </div>

    <!-- <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat optio expedita minus accusantium facere placeat magnam maiores nulla magni dolore blanditiis eligendi, aliquam odio voluptates cum ut officia sit nemo.</p> -->
    <!-- <img src="../img/bgLogin.jpg" class="img-fluid" alt="Responsive image"> -->


    <div class="container login-container wow fadeInUp">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Se Connecter</h3>
                <form method="post" action="#">
                
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="mdp" placeholder="Mot De Passe *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Mot de passe oublié?</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
            </div>
        </div>
    </div>


</div>

<?php include "../footer.php"; ?>