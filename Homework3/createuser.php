
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<div class="container mt-4 pt-5 pb-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-light shadow-sm">
                <div class="card-header">
                    Create User
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Username" title="Input username" 
                                name="uname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Address" title="Input email" 
                                name="mail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" title="Input password" 
                                name="pass" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" title="Input password" 
                                name="confirmpass" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <a href="arthourize.php" class="btn btn-danger" 
                                style="width: 49%;" title="Cancel new user">Cancel</a>
                            <button name="btn-create" class="btn btn-info" 
                                style="width: 49.5%;" title="Create new user" type="submit">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php
    if(isset($_POST['btn-create'])) {

        $uname = $_POST['uname'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $confirmpass = $_POST['confirmpass'];

        if ($pass != $confirmpass) {
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> Your information is incorrect.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
        } else {
            header("location: index.php");
        }

    }