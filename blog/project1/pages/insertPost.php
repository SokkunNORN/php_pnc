
<?php

require_once "connection.php";

if(isset($_POST['btn-post'])) {
    $uname = $_POST['username'];
    $post = $_POST['post'];

    $query = "INSERT INTO tbl_blog (name, post) 
        VALUES('$uname', '$post')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: ?page=blog");
    } //else {
    //     echo "Cannot Insert";
    // }
}



