
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>

<?php
session_start();
if(!empty($_POST['username'] && $_POST['password'])) {
    if(isset($_POST['btn-signin'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        if($name == 'admin' && $pass == 'password') {
            $_SESSION['uname'] = $name;
            $_SESSION['passwd'] = $pass;
            header('Location: result.php');
        }else {
            ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Danger!</strong> incorret information!
            </div>
            <?php
        }
    }
} else {?>
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Danger!</strong> Please input your information!
</div>
<?php   
}
?>