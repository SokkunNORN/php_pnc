
<?php
include_once "connect.php";

$query = "DELETE FROM tbl_post WHERE post_id = " . $_GET['id'];

$del = mysqli_query($conn, $query);

if ($del) {
    header("location: ../index.php");
} else {
    echo "game over";
}