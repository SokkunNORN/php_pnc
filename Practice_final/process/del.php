

<?php

include_once "conn.php";
$query = "DELETE FROM tbl_user WHERE user_id = " . $_GET['id'];
$del = mysqli_query($conn, $query);
if($del) {
    header("location: ../index.php");
} else {
    echo "game over";
}



