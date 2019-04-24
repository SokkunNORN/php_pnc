
<?php

include_once "connect.php";

$id = $_GET['id'];

$query = "DELETE FROM tbl_teacher WHERE tea_id = '$id' ";
$result = mysqli_query($conn, $query);
if($result) {
    header("location: index.php");
} else { 
    echo "game over!!!";
}




