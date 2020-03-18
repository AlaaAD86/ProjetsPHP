<?php
    require "header.php";
?>

<main>


<div class="sign-up-form">
    <h1>
        Sign Up
    </h1>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwd-repeat" placeholder="Confirm password">

        <button type="submit" name="signup-submit">SIGN UP</button>


    </form>

</div>

</main>

<?php
    require "footer.php";
?>