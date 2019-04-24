<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    
    <main class="container mt-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"> 
                <div class="card mt-4 bg-light shadow-sm">
                    <div class="card-header">
                        Form Login
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="uname" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-danger" style="width:49%;" type="reset">Cancel</button>
                                <button class="btn btn-outline-success" style="width:49.4%;" type="submit" name="btn-loing">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-4"></div>
        </div>
    </main>

</body>
</html>