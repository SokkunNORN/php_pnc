<?php

// class
class Animal {
    private $firstName;
    private $lastName;
    private $typeAnimal;

    // public function _construct($firstName) {
    //     $this -> firstName = $firstName;
    // }

    public function setName($fName, $lName, $tAnimal) {
        $this -> firstName = $fName;
        $this -> lastName = $lName;
        $this -> typeAnimal = $tAnimal;
    }

    public function getName() {
        return "Your Pet's name is: " . $this -> firstName . " " . $this -> lastName
            . " and this type is: " . $this -> typeAnimal;
    }

} 





