<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables of PHP</title>
</head>
<body>
<div>

    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>

    <?php

        $name = $_GET['person'];
        echo $name." est japonais";
?>
</div>

<br>


<!-- /*---------------------------------------------------------------------------------------------------*/ -->
<div>

<?php

    echo strlen("Hello World"); // compter les lettres
    echo str_word_count("echo echo world"); // compter les mots
    echo strrev("simplon"); //inverser 
    echo strpos("Hello world","world"); // count from where the word begins
    echo str_replace("Marco", "Jason", "Hi Marco"); // relpace a string by another


?>


</div>
<!-- /*---------------------------------------------------------------------------------------------------*/ -->

<div>

<?php

//  Comparaison Operator

    $x = 5;
    $y = 10;

    if($x == $y){
        echo "true";
    } else {
        echo "false";
    }

?>



</div>


<!-- /*---------------------------------------------------------------------------------------------------*/ -->
<!-- /*-------------------------------------------CALCULATOR------------------------------------------------*/ -->



<div>


<form>

    <input type="text" name="num1" placeholde="Number1">
    <input type="text" name="num2" placeholde="Number2">

    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>


</form>

<p>The answer is: </p>
<?php

    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator){
            case 'None':
                echo "You have to select a method";
            break;
            case 'Add':
                echo $result1 + $result2;
            break;
            case 'Subtract':
                echo $result1 - $result2;
            break;
            case 'Multiply':
                echo $result1 * $result2;
            break;
            case 'Divide':
                echo $result1 / $result2;
            break;
        }
    }

?>


</div>

</body>
</html>