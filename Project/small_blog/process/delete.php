
<?php

include_once "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM tbl_buget WHERE id=$id";
$result = mysqli_query($conn, $query);
if($result) {
    header("location: ../pages/buget.php");
} else {
    echo "game over!!!";
}






