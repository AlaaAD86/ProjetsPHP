<?php

namespace Person;

 class Person {
     // properties
     private $name;
     private $age;

    //  public static $drinkingAge = 21;

     public function __construct($name, $age){
         $this->name = $name;
         $this->age = $age;
     }

    //  public function setName($name){
    //     $this->name = $name;
    //  }

     public function getPerson(){
        $person = $this->name . " is " . $this->age . " years old";
        return $person;
    }

    // public static function setDrinkingAge($newDA){
    //     self::$drinkingAge = $newDA;
    // }
 }