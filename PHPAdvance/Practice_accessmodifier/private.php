
<?php

class Customer {
    private $mName;
    public function setName($name) {
        $this->mName = $name;
    }
    public function getName() {
        return $this->mName;
    }
}


$cus = new Customer();
$cus->setName("Cambodia");
echo "<br><b>".$cus->getName();


