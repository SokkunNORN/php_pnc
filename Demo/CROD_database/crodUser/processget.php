
<?php
include_once 'connection.php';
?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <table class="table table-striped table-bordered shadow-sm">
        <tr class='text-center text-primary'>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student Province</th>
            <th>Action</th>
        </tr>

        <?php 
            $result = mysqli_query($connect, "SELECT * FROM tbl_student");
            foreach($result as $row) {
        ?>
        
        <tr>
            <td><?php echo $row['stu_id']; ?></td>
            <td><?php echo $row['stu_name']; ?></td>
            <td><?php echo $row['stu_email']; ?></td>
            <td><?php echo $row['stu_province']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                <a href="update.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-info btn-sm">Update</a>
            </td>
        </tr>
        
        <?php
            }
        ?>

    </table>
    <hr>
    <a href="formadd.php" class="btn btn-outline-info shadow-sm">Add Student</a>
</div>