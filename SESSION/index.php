<?php 
    session_start();
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        header('Location: result.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>simple loing</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card bg-light shadow-lg">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="#" method='post'>
                            <div class="form-group">
                                <input type="text" name='username' placeholder='Username' class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name='password' placeholder='Password' class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type='submit' name='btn-submit'>
                                    Log In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            if(isset($_POST['btn-submit'])){
                $username = $_POST['username'];
                $pass = $_POST['password'];
                if($username == "admin" && $pass == "122") {
                    $_SESSION['user'] = $username;
                    $_SESSION['passwd'] = $pass;
                    header('Location: result.php');
                }else if($username != 'admin' && $pass != '122') {
                ?>

                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <div class="alert alert-danger">
                                    <strong>Please!</strong> Your information is not correct.
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                } else {
                ?>

                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <div class="alert alert-danger">
                                    <strong>Please!</strong> You are not input information.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                }
            }            
        }
    ?>

</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>