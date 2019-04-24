
<?php

$connect = mysqli_connect('localhost', 'root', '', 'tbl_fri');

if(isset($_POST['btn-update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $sex = $_POST['gender'];
    $age = $_POST['age'];
    $location = $_POST['location'];

    $query = " UPDATE table_fri SET 
        fri_name = '$name', 
        fri_sex = '$sex',
        fri_age = '$age', 
        fri_location = '$location'
        WHERE fri_id = '$id' ";

    $result = mysqli_query($connect, $query);

    if($result) {
        header("Location: index.php");
    } else {
        echo "Cannot delete";
    };
};

?>