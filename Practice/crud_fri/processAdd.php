
<?php

$connect = mysqli_connect('localhost', 'root', '', 'tbl_fri');

// ======== add friend ========
if(isset($_POST['btn-add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $location = $_POST['location'];

    $query = "INSERT INTO table_fri (fri_name, fri_sex, fri_age, fri_location)
        VALUES ('$name', '$gender', '$age', '$location')";
    
    $result = mysqli_query($connect, $query);

    if ($result) {
        header("location: index.php");
    } else {
        echo "cannot insert";
    }
}
