<?php
    if(isset($_POST['btn-submit'])) {
        $sex = $_POST['gender'];
        $subject = $_POST['subject'];
?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="card bg-light shadow-lg">
        <div class="card-header">
            <h2>Result:</h2>
        </div>
        <div class="card-body">
            Your Sex: <?php echo $sex ?> <br>
            Your Subject: <?php echo $subject ?>
        </div>
        <div class="card-footer bg-danger">
            <a href="index.php" class="btn btn-info btn-block">Go Back</a>
        </div>
    </div>
</div>

<?php
    }
?>