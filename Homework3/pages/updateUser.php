
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_user WHERE user_id = '$id' ";
$show = mysqli_query($conn, $sql);
foreach ($show as $value) :
?>

<main class="container pt-5 mt-5 mb-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-ligth shadow-sm">
                <div class="card-header">
                    Form Update
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <input type="hidden" name="id" value='<?php echo $id; ?>'> 
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $value['username']; ?>"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" placeholder="Position" value="<?php echo $value['position']; ?>" 
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" value="<?php echo $value['city']; ?>" 
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" placeholder="Age" value="<?php echo $value['age']; ?>" 
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-success" title="Update User" style="width: 49.5%;" 
                                name="btn-update"><i class="fa fa-check"></i> Update</button>
                            <a href="?page=user.php" title="No Update" class="btn btn-outline-danger" 
                                style="width: 49%;"><i class="fa fa-times"></i> Cencle</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</main>

<?php

    endforeach;

    if (isset($_POST['btn-update'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $city = $_POST['city'];
        $age = $_POST['age'];

        $query = "UPDATE tbl_user SET 
        username = '$name', position = '$position', 
        city = '$city', age = '$age' 
        WHERE user_id  = '$id' ";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("location: ?page=user.php");
        } else {
            echo "No body know";
        }

    }