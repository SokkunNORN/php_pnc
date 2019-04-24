
<?php

class Customer {

    private $fName;
    private $lName;
    private $Age;

    public function __construct($fName, $lName, $age) {
        $this->setInfo($fName, $lName, $age);
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

$Student = new Customer("Sokkun", "Norn", 20);
echo $Student->getInfo();


?>






