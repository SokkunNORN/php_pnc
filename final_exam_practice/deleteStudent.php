
<?php

include_once "dbConnect.php";
$query = "DELETE FROM tbl_student WHERE stu_id = " . $_GET['id'];
$del = mysqli_query($conn, $query);

if($del) {
    header("location: index.php");
} else {
    echo "over";
}



