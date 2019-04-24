
<?php

include_once "connect.php";
$query = "SELECT * FROM tbl_teacher";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="addTeacher.php" title="Add new"><i class="material-icons text-info">control_point</i></a>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php foreach($result as $value) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $value['tea_id']; ?></td>
                        <td><?php echo $value['tea_name']; ?></td>
                        <td><?php echo $value['tea_email']; ?></td>
                        <td><?php echo $value['tea_age']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $value['tea_id']; ?>" title="Edit teacher"><i class="material-icons text-info">create</i></a>
                            <a href="proccessDelete.php?id=<?php echo $value['tea_id']; ?>" title="Delete teacher"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>