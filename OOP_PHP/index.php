<?php
include 'include/autoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO</title>
</head>
<body>

    <form action="calc.php" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">

        <select name="cal">
            <option value="add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>

        <button type="submit">Calculate</button>
    </form>
    
    <?php
        // echo Person::$drinkingAge;
        // Person::setDrinkingAge(18);
        // echo Person::$drinkingAge;

        // $person1 = new Person\Person ("Dani", 22);
        // echo $person1-> getPerson();




    ?>

</body>
</html>