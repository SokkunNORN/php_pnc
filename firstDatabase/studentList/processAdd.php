

<?php
require_once 'connection.php';

if( empty($_POST['username']) || empty($_POST['email']) || empty($_POST['province']) ) {
?>
<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <div class="container mt-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <a href="addStudent.php" class="btn btn-danger btn-block shadow-lg" type='button'>Information is not correct !</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

<?php    
} else {
    if(isset($_POST['btn-add'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $province = $_POST['province'];

        $query = "INSERT INTO tbl_student (stu_name, stu_email, stu_province)
            VALUES('$username', '$email', '$province')";

        $result = mysqli_query($connection, $query);

        if($result) {
            echo "Insert Success !";
        } else {
            echo "System Error !";
        }
    }
}
?>