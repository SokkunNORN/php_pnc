<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-light shadow-lg">
            <div class="card-header">
                <b>
                    Enter information:
                </b>
            </div>
            <div class="card-body">
                <form action="process.php" method='post'>
                    <div class="form-group">
                        <input type="text" name='username' placeholder='Username' class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name='password' placeholder='Password' class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" name='btn-submit' type='submit'>Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>