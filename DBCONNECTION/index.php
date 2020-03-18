

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN SYSTEM</title>
</head>
<body>
  

    <?php
/*
        $sql = "SELECT * FROM phpusers;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['user_uid']."<br>";

            }
        }
*/
?>
<!-- INSERTING USER SIGNUP INFORMATION USING HTML FORMS AND PHP -->

<form action="includes/signup.ink.php" method="POST">
        <input  type="text" name="first" placeholder="FirstName">
        <br>
        <input  type="text" name="last" placeholder="LastName">
        <br>
        <input  type="text" name="mail" placeholder="Mail">
        <br>
        <input  type="text" name="uid" placeholder="Username">
        <br>
        <input  type="password" name="password" placeholder="Password">
        <br>
        <button type="submit" name="submit">SignUp</button>
</form> 




</body>
</html>