
<?php

include_once "connect.php";

if(isset($_POST['btn-edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = "UPDATE tbl_teacher SET 
        tea_name = '$name', tea_email = '$email', 
        tea_age = '$age' WHERE tea_id = '$id' ";

    $result = mysqli_query($conn, $query);

    if($result) {
       header("location: index.php");
    } else {
        echo "game over";
    }

}


