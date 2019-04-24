
<?php 

$connect = mysqli_connect('localhost', 'root', '', 'tbl_fri');

$id = $_GET['id'];
$query = "SELECT * FROM table_fri WHERE fri_id = '$id'";
$result = mysqli_query($connect, $query);

foreach($result as $row):

?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-light shadow-sm">
                <div class="card-header text-center">
                    Edit your friend
                </div>
                <div class="card-body">
                    <form action="processUpdate.php" method="post">
                        <input type="hidden" name="id" value='<?php echo $id; ?>'> 
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name Friend"
                            value="<?php echo $row['fri_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gender" placeholder="Gender"
                            value="<?php echo $row['fri_sex']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Age Friend" name="age"
                            value='<?php echo $row['fri_age'] ?>' class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Location Friend" name="location"
                            value="<?php echo $row['fri_location']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="btn btn-outline-danger" 
                                style="width:49%;">Cancle</a>
                            <button class="btn btn-outline-info" name="btn-update" type="submit" 
                                style="width:49%;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<?php endforeach; ?>