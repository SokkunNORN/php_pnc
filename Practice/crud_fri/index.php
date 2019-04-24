
<?php
    include_once 'processAdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data friend</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h1>Data Friends</h1>
                <hr>
                <table class="table table-striped shadow-sm">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>  
                    <?php
                        $query = "SELECT * FROM table_fri order by fri_id desc";
                        $result = mysqli_query($connect, $query);
                        foreach ( $result as $row ){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['fri_name']; ?></td>
                            <td><?php echo $row['fri_sex']; ?></td>
                            <td><?php echo $row['fri_age']; ?></td>
                            <td><?php echo $row['fri_location']; ?></td>
                            <td>
                                <a href="formUpdate.php?id=<?php echo $row['fri_id']; ?>" class="btn btn-outline-success" name="btn-edit"><i class="fa fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $row['fri_id']; ?>" class="btn btn-outline-danger" name="btn-delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>  
                        <?php } ?>                
                </table>
                <hr>
                <a href="form.php" class="btn btn-outline-info">Add New Friend</a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</body>
</html>