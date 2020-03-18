<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator OOP PHP</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="POST">
    
    <p>My Calculator</p>

    <input type="number" name="num1" placeholder="First Number">
    
    <select name="oper">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="div">Divide</option>
    </select>

    <input type="number" name="num2" placeholder="Second Number">

    <button type="submit" name="submit">Calculate</button>
    
    </form>

</body>
</html>