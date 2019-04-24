
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student list database</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <tr class='text-center'>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Province</th>
            </tr>
            <?php include_once "processselect.php" ?>
        </table>
        <hr>
        <p><a href="formadd.php" class='btn btn-info'>Add Student</a></p>
    </div>
</body>
</html>