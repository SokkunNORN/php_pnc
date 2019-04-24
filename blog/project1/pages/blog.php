

<?php include_once "connection.php" ?>

<main class="container" role="main">
    <a href="?page=addPost" class="btn btn-outline-info mt-4 mb-4">Create New Post</a>

    <?php 

    $query = "select * from tbl_blog order by blog_id desc";
    $result = mysqli_query($conn, $query);
    foreach ($result as $data):

    ?>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $data['name'] ?>
            </h4>
            <p class="card-text">
                <?php echo $data['post'] ?>
            </p>
            <div class="btn-group float-right">
                <a href="?page=updatePost"
                    class="btn btn-outline-info mr-1 mt-1"
                    name="updatePost">Update Post</a>
                <a href="pages/deletePost.php?id=<?php echo $data['blog_id']; ?>"
                    class="btn btn-outline-danger mt-1"
                    name="deletePost">Delete Post</a>
            </div>
            <div class="card-footer">
                Date: <?php echo  $data['post_at'] ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</main>