<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<?php
    if(isset($_POST['btn-submit'])) {
        if(!emply($_POST['language'])) {
?>
<div class="container mt-4">
    <div class="alert alert-success alert-dismissible">
        <button class="close" data-dismiss='alert'>&times;</button>
        <strong>Success!</strong>See you subject that you have selected!
    </div>
        <div class="card bg-info">
            <div class="card-header">Subject you selected</div>
            <div class="card-body">
                <?php 
                    foreach($_POST['language'] as $language):
                ?>
                <p><span class="badge badge-warning"><?php echo $language; ?></span></p>
                    <?php endforeach;?>
            </div>
        </div>
    <hr>
    <a href="index.php" class="btn btn-info">Go Home</a>
</div>

<?php 
    }
    else
    {
?>

<div class="container mt-4">
    <div class="alert alert-warning alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">&times;</button>
        <strong>Warning</strong>You are not yet select subject!
    </div>
    <hr>
    <a href="index.php" class="btn-warning">Go Home</a>
</div>

<?php 
    }
?>