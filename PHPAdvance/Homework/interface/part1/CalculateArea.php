

<?php

include "IArea.php";

class CalculateArea implements IArea {

    public function square($corner1, $corner2) {
        return $corner1 * $corner2;
    }
    public function rectangular($long, $width) {
        return $long * $width;
    }
    public function circle($r) {
        return $r * $r * 3.14;
    }
}

$area = new CalculateArea();

echo "Square area (15x15) is: " . $area->square(15, 15) . "<br>";
echo "Rectangular area (27x15) is: " . $area->rectangular(27, 15) . "<br>";
echo "Circle area (r = 9) is: " . $area->circle(9) . "<br>";


