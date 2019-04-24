
<?php 

$id = $_GET['id'];
$query = "DELETE FROM tbl_user WHERE user_id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: ?page=user.php");
} else {
    echo "No body know";
}
