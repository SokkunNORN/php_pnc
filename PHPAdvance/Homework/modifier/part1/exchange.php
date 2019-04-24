
<?php

class Exchange
{
    public $riel;
    public function exchange() {
        $dollar = $this->riel / 4000;
        return "Exchange Rate for Jan-3-2019<br>
        1$ = 4000R<br>Your Money exchange is " . $dollar . 
        "R and exchange to<br> dollar is " . 
        $dollar . "$";
    }

}

$dollar = new Exchange;
$dollar->riel = 12000000;
echo $dollar->exchange();



