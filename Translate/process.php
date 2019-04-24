<?php
    session_start();
    if(isset($_GET['lang'])){
        $lang=$_GET['lang'];
        $_SESSION['language'] =$lang;
    }
?>