
<?php

include "ICalculate.php";

class Calculate implements ICalculate {

    private $name;
    private $product;
    private $price;
    private $moneyBorrow;
    private $interest;
    private $money;
    private $duration;
    private $priceProduct;

    public function setInfo($name, $product, 
        $price, $moneyBorrow, $interest, 
        $money, $duration, $priceProduct)
    {
        $this->name = $name;
        $this->product = $product;
        $this->price = $price;
        $this->moneyBorrow = $moneyBorrow;
        $this->interest = $interest;
        $this->money = $money;
        $this->duration = $duration;
        $this->priceProduct = $priceProduct;
    }

    public function getInfo() {
        echo $this->name." borrow money from AEON ".$this->moneyBorrow.
            " to buy motor ".$this->product." with interest rate ".
            $this->interest."% per month with duration ".$this->duration.
            " months.".$this->product." price ".$this->priceProduct.
            "$ and she has money ".$this->money."$";
    }

    public function totalMoney() {
        $total = ($this->interest / 100 * $this->moneyBorrow )
            * $this->duration + $this->moneyBorrow;
        return "Total Money to pay for AEON: ".$total;
    }

    public function moneyPayment() {
        $total = ($this->interest / 100 * $this->moneyBorrow);
        return "Money Payment per every month: ".$total;
    }

    public function totalInterest() {
        $total = ($this->interest / 100 * $this->moneyBorrow )
            * $this->duration;
        return "Total Interest: ".$total;
    }
}

$cus = new Calculate;
$cus->setInfo("Miss. Phors", "Suzuki Smash V 2014", 
1470, 870, 1.9, 600, 12, 1470);
echo $cus->getInfo()."<br>";
echo $cus->totalMoney()."$<br>";
echo $cus->moneyPayment()."$<br>";
echo $cus->totalInterest()."$<br>";




