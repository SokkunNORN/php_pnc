
<?php
require_once "connection.php";

if(isset($_POST['btn-update'])) {
    $studentName = $_POST['student'];
    $studentEmail = $_POST['email'];
    $studentProvince = $_POST['province'];
    $id = $_POST['id'];
    $query = " UPDATE tbl_student SET 
        stu_name = '$studentName', 
        stu_email = '$studentEmail', 
        stu_province = '$studentProvince' 
        WHERE stu_id = '$id' ";

    $result = mysqli_query($connect, $query);

    if($result) {
        header("Location: index.php");
    } else {
        echo "Cannot Update";
    }
}
?>