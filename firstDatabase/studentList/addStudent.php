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
    <div class="container m-4">
        <div class="card bg-info">
            <div class="card-header text-center">
                Add New Student
            </div>
            <div class="card-body">
                <form action="processAdd.php" method='post'>
                    <div class="form-group">
                        <input type="text" name='username' class="form-control" placeholder='Enter username'>
                    </div>
                    <div class="form-group">
                        <input type="email" name='email' class="form-control" placeholder='Enter email'>
                    </div>
                    <div class="form-group">
                        <input type="text" name='province' class="form-control" placeholder='Enter province'>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type='submit' name='btn-add'>
                            Add Student Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>