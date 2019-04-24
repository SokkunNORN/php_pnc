
<?php

session_start();

if (isset($_POST['btn-loing'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
   
    
    if ($uname == "Admin" && $pass == "123") {
        $_SESSION['name'] = $uname;
        $_SESSION['passwd'] = $pass;
        header("location: index.php");
    } else {
        header("location: formlogin.php");
    }
}

if (isset($_POST['btn-logout'])) {
    header("location: formlogin.php");
}