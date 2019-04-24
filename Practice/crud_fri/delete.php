<?php 

require_once "processAdd.php";

$id = $_GET['id'];
$query = "DELETE FROM table_fri WHERE fri_id = $id";
 
$result = mysqli_query($connect, $query);

echo $id;

if($result) {
    header("Location: index.php");
} else {
    echo "cannot delete";
}

?>