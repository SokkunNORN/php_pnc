
<?php

class Calculate {
    public $factorial;
    
    function __construct($factorial) {
        $this->factorial = $factorial;
    } 

    public function factorial() {
        $result = 1;
        if ($this->factorial < 0) {
            $result = ":) Cannot calculate !!!";
        } else if ($this->factorial == "") {
            $result = "Null";
        } else if ($this->factorial == 0) {
            $result = 1;
        } else {
            for ($i = 1; $i <= $this->factorial; $i++) {
                $result = $result * $i;
            }  
        }
        return $result;
    }
}









