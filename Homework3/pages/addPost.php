

<main class="container pt-5 mt-5 mb-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-ligth shadow-sm">
                <div class="card-header text-center">
                    Create Post
                </div>
                <div class="card-body">
                    <form action="#" method="POST"> 
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="uname" 
                            class="form-control" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Message" cols="30" 
                                rows="5" class="form-control" required></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" title="New Post" name="btn-post" 
                                class="btn btn-outline-info" style="width: 49.5%;">
                                <i class="fa fa-check"></i> Create</button>
                            <a href="?page=blog.php" title="No Add" class="btn btn-outline-danger" 
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
    if(isset($_POST['btn-post'])) {
        $uname = $_POST['uname'];
        $message = $_POST['message'];

        $query = "INSERT INTO tbl_blog (username, post)
        VALUES ('$uname', '$message')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("location: ?page=blog.php");
        } else {
            echo "No information";
        }

    }
?>
