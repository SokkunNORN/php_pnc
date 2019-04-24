
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_blog WHERE blog_id = '$id' ";
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
                            <textarea name="message" cols="30" rows="5" class="form-control" 
                                placeholder="Message" required ><?php echo $value['post']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-success" title="Update Post" style="width: 49.5%;" 
                                name="btn-update"><i class="fa fa-check"></i> Update</button>
                            <a href="?page=blog.php" title="No Update" class="btn btn-outline-danger" 
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
        $message = $_POST['message'];
        $query = "UPDATE tbl_blog SET 
        username = '$name', post = '$message'
        WHERE blog_id  = '$id' ";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("location: ?page=blog.php");
        } else {
            echo "Game over!";
        }

    }