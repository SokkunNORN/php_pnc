<?php 
    
$id = $_GET['id'];
$query = "DELETE FROM tbl_blog WHERE blog_id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: ?page=blog.php");
} else {
    echo "No body know";
}
