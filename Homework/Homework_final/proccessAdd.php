
<?php include_once "connect.php"; 

if(isset($_POST['btn-add'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = "INSERT INTO tbl_teacher (tea_name, tea_email, tea_age)
        VALUES('$name', '$email', '$age')";
    
    $result = mysqli_query($conn, $query);

    if($result) {
        header("location: index.php");
    } else {
        echo "game over";
    }

}









?>