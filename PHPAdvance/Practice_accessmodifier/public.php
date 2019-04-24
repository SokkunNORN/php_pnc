
<?php

class Customer {
    public $mName;
    public function setName($name) {
        $this->mName = $name;
    }
    public function getName() {
        return $this->mName;
    }
}


$cus = new Customer();
echo $cus->mName="Cambo";
$cus->setName("Cambodia");
echo "<br><b>".$cus->getName();
