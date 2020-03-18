<?php
include 'include/autoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CALC PHP</title>
</head>
<body>

    <form action="calc.php" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">

        <select name="cal">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="div">Divide</option>
        </select>

        <button type="submit">Calculate</button>
    </form>
    
  
</body>
</html>