
<?php

class Customer {

    private $fName;
    private $lName;
    private $Age;

    public function __construct() {
        $fName = "";
        $lName = "";
        $Age = 0;
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

$cus1 = new Customer();
$cus1 -> setInfo("Sokkun", "Norn", 21);
echo $cus1->getInfo();



