
<?php
    if(isset($_POST['btn-submit'])) {
        $subject = $_POST['subject'];
        // print_r($subject);
?>


<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4 bg-light">
    <div class="card">
        <div class="card-header">Result:</div>
        <div class="card-body">
            <?php foreach($subject as $value) {?>
                <p><?php echo $value ?></p>
            <?php }?>        
        </div>
        <a href="index.php" class="btn btn-outline-danger btn-block mt-4">Go Back</a>
    </div>
</div>

<?php
    }
?>

