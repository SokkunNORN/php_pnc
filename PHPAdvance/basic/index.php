
<?php

class Customer {
    private $fName, $lName;

    public function setInfo($fName, $lName) {
        $this->fName = $fName;
        $this->lName = $lName;
    }

    public function getInfo() {
        echo $this->fName . " : " . $this->lName;
    }
}

$customer = new Customer;

$customer->setInfo("Sokkun", "Norn");
$customer->getInfo();

?>