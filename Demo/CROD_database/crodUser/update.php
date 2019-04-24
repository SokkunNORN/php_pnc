
<?php 

    include_once 'connection.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_student WHERE stu_id = $id";
    $result = mysqli_query($connect, $query);

    foreach($result as $row) :

?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-light shadow-lg">
                <div class="card-header text-center">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">
                    <form action="processupdate.php" method='post'>
                        <input type="hidden" name="id" value='<?php echo $id; ?>'> 
                        <div class="form-group">
                            <input type="text" name='student' class="form-control" placeholder='Username' required 
                            value="<?php echo $row['stu_name']?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name='email' class="form-control" placeholder='Email' required 
                            value="<?php echo $row['stu_email']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name='province' class="form-control" placeholder='Province' required 
                            value="<?php echo $row['stu_province']?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-primary btn-block" name='btn-update' type='submit'>Update</button>
                            <a href="index.php" class="btn btn-outline-danger btn-block">Cencel</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</div>

<?php 
endforeach;
?>