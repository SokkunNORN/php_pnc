<?php

class ShowURL {
    public $URL;
    public function __construct($url) {
        $this->URL = $url;
    }
}
   
$result = new showURL($_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
echo "<h1>My project URL is: ".$result->URL."<h1>";





