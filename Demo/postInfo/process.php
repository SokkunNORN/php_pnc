<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<?php
    if(isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $passwd = sha1($pass);
        
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
                    Your password: <?php echo $passwd;?>
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