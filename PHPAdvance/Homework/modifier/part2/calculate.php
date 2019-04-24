
<?php

class Data {

    protected $capital;
    protected $year;
    protected $interest;

    public function setInfo($capital, $year, $interest) {
        $this->capital = $capital;
        $this->year = $year;
        $this->interest = $interest;
    }

    public function getCapital() {
        $this->capital;
    }

    public function getYear() {
        $this->year;
    }

    public function getInterest() {
        $this->interest;
    }

}

class Calculate extends Data {

    private $mName;
    public function setCalculate($mName, $capital, $year) {
        $this->mName = $mName;
        $this->capital = $capital;
        $this->year = $year;
        $this->interest = $year * 10;
    }

    public function getCalculate() {
        $calculate = $this->capital * $this->interest / 100;
        $day = $this->year * 365;
        return $this->mName . " must pay interest " . $calculate . 
        "$ for duration " . $day . " days with capital " . 
        $this->capital . "$.";
    }

}


$banking = new Calculate;
$banking->setCalculate("Mr. Vivord Rith", 100000, 1);
echo $banking->getCalculate();


