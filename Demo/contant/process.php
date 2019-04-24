<?php
    if(isset($_POST['btn-message'])) {
        $username = $_POST['username'];
        $sms = $_POST['message'];
?>
<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="card bg-info">
        <div class="card-header">
            <?php echo $username; ?>
        </div>
        <div class="card-body">
            <?php echo $sms; ?>
        </div>
    </div>
    <a href="index.php" type='button' class="btn bg-danger btn-block">
        Go Back
    </a>
</div>
        
<?php
    }
?>
