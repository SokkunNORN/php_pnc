<?php

include_once "Animal.php";

class Cat extends Animal {

}

$Cats = new Cat();

$Cats -> setName("Magi", "Lucas", "Cat");
echo $Cats -> getName();

