

<?php

class Calculate {
    public $calculate, $rate, $duration;

    public function cal($capital, $rate, $duration) {
        $TotalInterest=0;
        $TotalInterest=($capital * ($rate / 100) * $duration);
        return $TotalInterest;
    }

    public function totalMoney($capital, $rate, $duration) {
        $TotalMoney = ($capital * ($rate / 100) * $duration) + $capital;
        return $TotalMoney;
    }

    public function payMentPerMonth($capital, $rate, $duration) {
        $PayMentPerMonth = ($capital * ($rate / 100) * $duration) / $duration;
        return $PayMentPerMonth;
    }
}




