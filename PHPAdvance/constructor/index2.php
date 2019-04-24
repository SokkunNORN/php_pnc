
<?php

class Customer {

    public $fName;
    private $lName;
    private $Age;

    public function __construct($fName) {
        $this->fName = $fName;
    }

    public function getInfo() {
        return "Name: " . $this->fName . " " . $this->lName ."<br>Age: " . $this->Age;
    }

    public function setInfo($fName, $lName, $age) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->Age = $age;
    }

}

$Student = new Customer("Sokkun");
echo $Student->fName;


?>