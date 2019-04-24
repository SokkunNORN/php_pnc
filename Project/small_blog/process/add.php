
<?php

include_once "conn.php";
if (isset($_POST['add-bg'])) {

    $title = $_POST['title'];
    $money = $_POST['money'];

    $query = "INSERT INTO tbl_buget (title, money) 
        VALUES('$title', '$money') ";
 
    $result = mysqli_query($conn, $query);

}
 



