<?php
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'first_database';

    $connection = mysqli_connect($serverName, $userName, $password, $dbName);

    if(!$connection) {
        echo "cannot conect !";
    } else {
        echo "connection success !!!!";
    }
?>