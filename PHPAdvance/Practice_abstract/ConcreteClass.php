<?php

include_once "abstractPrefix.php";

class ConcreteClass extends AbstractPrefix {

    public function prefixName($name, $separator=".") {
        if($name=="Pacman") {
            $prefix="Mr";
        } else if ($name=="Pacwoman") {
            $prefix="Mrs";
        } else {
            $prefix="";
        }
        return "{$prefix} {$separator} {$name}";
    }

}

$class = new ConcreteClass;

echo $class->prefixName("Pacman").'<br>';
echo $class->prefixName("Pacwoman");



