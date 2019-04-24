
<?php

include_once "process/conn.php";

$sql = "SELECT * FROM tbl_buget";
$arr = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Blog</title>
  <link rel="icon" href="images/logo.png">

  <!-- CSS  -->

    <!-- boostrap -->
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  
    <!-- material -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/topButton.css" type="text/css" rel="stylesheet"/>

    <!-- data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>