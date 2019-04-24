
<?php 

include_once "connect.php";
$id = $_GET['id'];
$query = "SELECT * FROM tbl_teacher WHERE tea_id = '$id' ";
$result = mysqli_query($conn, $query); 
foreach ($result as $value) :

?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <a href="index.php" title="Go back"><i class="material-icons text-info">arrow_back</i></a>
                    <hr>
                    <form action="proccessUpdate.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div class="form-group">
                            <input type="text" name="name" value="<?php echo $value['tea_name']; ?>" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo $value['tea_email']; ?>" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" value="<?php echo $value['tea_age']; ?>" placeholder="Age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-info" name="btn-edit" >Edit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php endforeach ;




