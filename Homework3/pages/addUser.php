

<main class="container pt-5 mt-5 mb-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-ligth shadow-sm">
                <div class="card-header text-center">
                    Create User
                </div>
                <div class="card-body">
                    <form action="#" method="POST"> 
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Position" name="position" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="City" name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Age" name="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" title="New User" name="btn-user" class="btn btn-outline-info" 
                                style="width: 49.5%;"><i class="fa fa-check"></i> Create</button>
                            <a href="?page=user.php" title="No Add" class="btn btn-outline-danger" 
                                style="width: 49%;"><i class="fa fa-times"></i> Cancle</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</main>

<?php
    if(isset($_POST['btn-user'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $city = $_POST['city'];
        $age = $_POST['age'];

        $query = " INSERT INTO tbl_user (username, position, city, age)
        VALUES ('$name', '$position', '$city', '$age') ";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("location: ?page=user.php");
        } else {
            echo "No body know";
        }

    }
?>
