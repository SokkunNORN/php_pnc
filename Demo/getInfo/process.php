<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<?php
    if(isset($_GET['btn-submit'])) {
        $email = $_GET['email'];
        $pass = $_GET['password'];
        
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Get Info
        </div>
        <div class="card-body">
            <p>
                <span class="badge badge-warning">
                    Your email: <?php echo $email;?>
                </span>
            </p>
            <p>
                <span class="badge badge-warning">
                    Your password: <?php echo $pass;?>
                </span>
            </p>
        </div>
    </div>
    <hr>
    <a href="index.php" class="btn btn-info">Go Back</a>
</div>
<?php
    };
?>