<?php 

require_once "connection.php";

$id = $_GET['id'];
$query = "DELETE FROM tbl_student WHERE stu_id = $id";
 
$result = mysqli_query($connect, $query);

echo $id;

if($result) {
    header("Location: index.php");
} else {
    echo "cannot delete";
}

?>