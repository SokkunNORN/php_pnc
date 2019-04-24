<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP get information</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Get Method in PHP
            </div>
            <div class="card-body">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <input type="email" placeholder="Enter email" class="form-control" name="email"> 
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter password" class="form-control" name="password"> 
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type ="submit" name="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>