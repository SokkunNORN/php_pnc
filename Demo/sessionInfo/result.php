
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="card bg-light shadow-lg">
        <div class="card-header text-center">
            <h3>Your Information:</h3>
        </div>
        <div class="card-body">
            <p>
                Username:
                <?php 
                    session_start();
                    echo $_SESSION['name']; 
                ?>
            </p>
            <p>
                Password:
                <?php
                    echo sha1($_SESSION['pwd']);
                ?>
            </p> 
        </div>
    </div>
    <hr>
    <p><a href="logout.php" class="btn btn-primary">Log out</a></p>
</div>
