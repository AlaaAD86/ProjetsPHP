<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loto</title>
</head>

<body>
    <?php


        // $loto = array_fill(0,49, 'N');
        // var_dump($loto);
        // print_r($loto);

        $myLoto = [25, 15, 49, 11, 6];
    
        $myArray = array();

        for ($x = 1; $x < 50; $x++){
            array_push($myArray, $x);
        }
        var_dump($myArray);

        for ($y = 0; $y <= 10; $y++){
            $num_aleatoire = array_rand($myArray, 5);
            var_dump($num_aleatoire);
            $myArray++;
            $result = array_intersect($num_aleatoire, $myLoto);
            var_dump($result);
        $all = array_merge($result);
        var_dump($all);

            
        }




        
?>



    <!-- <?php 
  
        // Declare an associative array 
        $arr = array( "a"=>"21", "b"=>"31", "c"=>"7", "d"=>"20" ); 

        // Use shiffle function to randomly assign numeric 
        // key to all elements of array. 
        shuffle($arr); 

        // Display the first shuffle element of array 
        echo $arr[0]; 

    ?> -->

    <!-- <?php


$count = 5;
$highball = 49;
$numbers = range(1, $highball);
shuffle($numbers);
$drawn = array_slice($numbers, - $count);
sort($drawn);
 
echo implode(" - ", $drawn);
?> -->

</body>

</html>