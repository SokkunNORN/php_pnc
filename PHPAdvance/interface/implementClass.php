
<?php

include_once "iMethodHolder.php";

class implementClass implements iMethodHolder {
    public function getInfo($info) {
        echo "<br>This is NEWS! " . $info . "<br>";
    }

    public function sendInfo($info) {   
        return $info;
    }

    public function calculate($first, $second) {
        $calculate = $first + $second;
        return $calculate;
    }

    public function useMethods() {
        $this->getInfo("Today you win 1000000$");
        echo $this->sendInfo("Man UTD change new coach") . "<br>";
        echo "You make $" . $this->calculate(90, 210) . " in your part-time job <br>";
    }
}

$newClass = new implementClass;

$newClass->getInfo("JOB") . "<br>";
echo $newClass->sendInfo("JOB Placement") . "<br>";
echo $newClass->calculate(10, 20);
$newClass->useMethods();





