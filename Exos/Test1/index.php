<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World of PHP</title>
</head>

<body>
    <!-- ==================== FIRST ECHO PHP ================= -->
    <div>
        <?php

            echo "Hello world echo! echo!";
        ?>
    </div>


    <!-- ==================== VARIABLES PHP ================= -->


    <!-- ==================== Concaténer des variables avec du texte ================= -->

    <div>
        <?php
            $hello = "buongiorno ";
            $world = "tutti";
            $variables = $hello.$world;
            echo $variables;
        ?>

    </div>

    <!-- ==================== Variables numériques ================= -->

    <div>
        <?php
            $montantHt = 15.2;
            $tva = 20 / 100;
            echo $montantHt * $tva;
        ?>

    </div>

    <!-- ==================== Variables numériques ================= -->
    <div>

        <?php
        
            $tab = array(15,22);
            $tabCrochets = [15,22];
            var_dump($tab);
            echo "<br>";
            var_dump($tabCrochets);
            $jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
            
            print_r($jours);
            
            var_dump($jours);
            
            echo $jours[0];
            echo "<br>";
            echo $jours[1];
            echo "<br>";
            echo $jours[5];

        //   ==================== ajouter un element au Tableau =================

            array_push($jours, "dimanche","Sidi");
          
            var_dump($jours);
            
            echo $jours[6];

        //   ==================== supprimer  un element du Tableau =================
            array_pop($jours);
            // ou
            $supprime = array_pop($jours);
            var_dump($jours);
        ?>

    </div>

    <!-- ==================== Tableaux ================= -->
    <div>

        <!-- ==================== Tableaux  Associatifs ================= -->

        <?php
        
        $activites = array(
            "Lundi"=>"Php",
            "Mardi"=>"Javascript",
            "Mercredi"=>"Typescript",
            "Jeudi"=>"Angular",
            "Vendredi"=>"SQL",
            "Samedi"=>"Python",
            "Dimanche"=>"Tout");
        //deux dimensions
       

        var_dump($activites);

        //deux dimensions search array by key
        $cle = array_search('Javascript', $activites);
        echo $cle;
        echo "<br>";

        // array_keys() - Return all the keys or a subset of the keys of an array
        // array_values() - Return all the values of an array
        // array_key_exists() - Checks if the given key or index exists in the array
        // in_array() - Checks if a value exists in an array


        $searchByValue = in_array('Python', $activites);
        echo $searchByValue;
        echo "<br>";
        var_dump(array_values($activites));

        var_dump(array_keys($activites));

        
        $pierre = array(
            "1"=>"Php",
            "2"=>"Javascript",
            "3"=>"Python"
        );
        $paul = array(
            "1"=>"Javascript",
            "2"=>"Css",
            "3"=>"Php"
        );
        $jacques = array(
            "1"=>"Java",
            "2"=>"Php",
            "3"=>"Javascript"
        );

        
        $preferences = array_merge($pierre, $jacques, $paul);
        echo "<br>";
        print_r(array_count_values($preferences));
        echo "<br>";
        var_dump($preferences);

     
      

        // var_dump($attrib);
    
        // ========================================une facon a faire ===================================//
        
       
        

        // ======================================autre facon a faire ===================================//

    //     $etudiants = array_push($preferences, $pierre, $jacques, $paul);

    //     var_dump($preferences);

    //    echo count($preferences);

    //    echo "<br>";
    //    echo "<br>";



        // ======================================autre autre facon a faire ===================================//

        

        // $etudiants = array_push($preferences, $result);
        // var_dump($preferences);

      



        ?>


    </div>
</body>

</html>