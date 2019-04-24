
<?php
    include_once "Animal.php";

    class Dog extends Animal {

    }

    // object access to class
    $Dogs = new Dog();
    $Dogs -> setName("Lagi Lagi", "Titok", "Dog");
    echo $Dogs -> getName();
    echo "<br>";



