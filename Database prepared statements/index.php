<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prepared Statments</title>
</head>
<body>
  

    <?php
        $data = "administrator";
        // created template
        $sql = "SELECT * FROM allusers WHERE user_uid=?;";
       
        // CREATE PREPARED STATMENT
        $stmt = mysqli_stmt_init($conn);

        // PREPARE THE PREPARED STATEMENT
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "sql statment failed";
        } else {
            // Bind parameters to the palceholder
            mysqli_stmt_bind_param($stmt, "s", $data); 

            // Run params in DataBase
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($result);
            
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['user_uid'] . "<br>";
            }
        }

       
    ?>


</body>
</html>