<?php

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'first_database';

$connect = mysqli_connect($servername, $username, $pass, $dbname);

if($connect) {
    die ("let's go");
}
echo "no";

?>