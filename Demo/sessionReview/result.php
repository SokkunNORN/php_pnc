
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container-fluid mt-4">
    <div class="card bg-light shadow-lg">
        <div class="card-header text-center">
            <h1>Welcome: <?php
                session_start();
                if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])) {
                    echo $_SESSION['uname'] . '.';
                }else {
                    header("Location: index.php");
                }   
            ?></h1>
        </div>
        <div class="card-body">
            <p>Thank you!</p>
            <p>
                <a href="signout.php" class="card-link btn btn-danger float-right">Sign out</a>
            </p>
        </div>
    </div>
</div>
