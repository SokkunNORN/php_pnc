
<?php

class Customer {
    protected $mName;
    public function setName($name) {
        $this->mName = $name;
    }
    public function getName() {
        return $this->mName;
    }
}

class Discount extends Customer {
    private $discount;
    public function setData($name, $discount) {
        $this->mName = $name;
        $this->discount = $discount;
    }
    public function getData() {
        return "The customer is: <b>".$this->mName."</b> has discount <b>".$this->discount."%<b>";
    }
}

$cus = new Discount();
$cus->setData("Cambodia", 50);
echo $cus->getData();
echo "<br><b>".$cus->getName();







