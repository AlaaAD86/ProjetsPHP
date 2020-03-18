<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>TUTOS of PHP (mmtuts)</title>
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
    <br>
    <br>
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

    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>


    <!-- /*---------------------------------------------------------------------------------------------------*/ -->
    <!-- /*-------------------------------------CALCULATOR-------------------------------------------------*/ -->
    <!-- /*---------------------------------------------------------------------------------------------------*/ -->

    <div>


        <form>

            <input type="text" name="num1" placeholder="Number 1">
            <input type="text" name="num2" placeholder="Number 2">
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

        <p>the answer is: </p>

        <?php


    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator){
            case 'None';
                echo "Select a method";
            break;
            case 'Add';
                echo $result1 + $result2; 
            break;
            case 'Subtract';
                echo $result1 - $result2; 
            break;
            case 'Multiply';
                echo  $result1 * $result2;
            break;
            case 'Divide';
                echo  $result1 / $result2;
            break;

        }
    }

    ?>

    </div>

    <!-- /*---------------------------------------------------------------------------------------------------*/ -->
    <!-- /*-------------------------------------Scheduled Message----------------------------------------------*/ -->
    <!-- /*---------------------------------------------------------------------------------------------------*/ -->

    <div>

        <?php

        $joursDeSemaine = date ('w'); //regarde w3c school for all the letters https://www.w3schools.com/php/func_date_date.asp
        switch ($joursDeSemaine ){
            case 1:
                echo "<h2>Lundi</h2>";
            break;
            case 2:
                echo "Mardi";
            break;
            case 3:
                echo "Mercredi";
            break;
            case 4:
                echo "Jeudi";
            break;
            case 5:
                echo "Vendredi";
            break;
            case 6:
                echo "Samedi";
            break;
            case 0:
                echo "Dimanche";
            break;

        }
?>

    </div>

    <!-- /*--------------------------------------------------------------------------------*/ -->
    <!-- /*------------------------------------LOOOOOOOOOPS----------------------------------------------*/ -->
    <!-- /*-----------------------------------------------------------------------------------*/ -->


    <div>

        <!-- /*---do-while loop----*/ -->

        <?php

            $x = 1;
            do {
                echo 'hello<br>';
                $x++;
            }
            while ($x <= 5);
    ?>

        <!-- /*---FOR EACH loop----*/ -->
        <?php

            $array = array("Mario", "Clara", "Sandoval");
                foreach ($array as $dataLoop) {
                    echo "My name is ".$dataLoop."<br>";
           }
    ?>

    </div>

    <!-- /*--------------------------------------------------------------------------------*/ -->
    <!-- /*------------------------------------SUPER GLOBALS-------------------------------*/ -->
    <!-- /*--------------------------------------------------------------------------------*/ -->

    <!-- /*---------------$GLOBALS - $POST - $GET - $COOKIES - $SESSION--------------------*/ -->


    <!-- /*---------------------------------$GLOBALS-------------------------------------*/ -->
    <div>
        <?php
            $x = 15;
            function something() {
                $y = 10;
                echo $GLOBALS['x'];
            }
            something();
        ?>

    </div>

    <!-- /*---------------------------------$_GET and $_POST-------------------------------------*/ -->
  
    <div>
        <form method="GET">
            <input type="hidden" name="name" value="MyName">
            <button type="submit">Click</button>
        </form>

        <?php
            echo $_GET['name'];        
        ?>

    </div>

    <!-- /*---------------------------------$_COOKIES - $_SESSION--------------------------------------*/ -->

    <div>

    <?php
                  setcookie("name", "Daniel", time() - 86400);
                  $_SESSION['name'] = "12";
    ?>

    </div>

    <!-- /*---------------------------------Start a Session in PHP -------------------------------------*/ -->

    <div>


    </div>

    <!-- /*---------------------------------$GLOBALS-------------------------------------*/ -->

    <div>


    </div>
</body>

</html>