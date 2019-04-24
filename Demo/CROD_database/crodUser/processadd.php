<?php

    // include file connection.php
    require_once "connection.php";

    if(isset($_POST['btn-add'])) {
        $student = $_POST['student'];
        $email = $_POST['email'];
        $province = $_POST['province'];
        $sql = "INSERT INTO tbl_student (stu_name, stu_email, stu_province)
            VALUES('$student', '$email', '$province')";

        $result = mysqli_query($connect, $sql);

        if($result) {
            header("Location: index.php");
        } else {
            header("Location: formadd.php");
        }
    }
    
?>