<?php

session_start();
    if(isset($_POST['btn-submit'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        // store data in session
        $_SESSION['name'] = $username;
        $_SESSION['pwd'] = $pass;

        // username or pass if emply
        if($username == "" || $pass == "") {
            header('Location:index.php');
        } else {
            header('Location:result.php');
        };
    };

?>