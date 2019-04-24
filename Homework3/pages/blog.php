

<?php 

$query = "SELECT * FROM tbl_blog ORDER by blog_id desc";
$result = mysqli_query($conn, $query);

?>

<main class="container pt-5 mt-5 mb-5">
    <a href="?page=addPost.php" title="Add Post" class="btn btn-info"><i class="fa fa-plus"></i> Add Post</a>
    <hr>
    <?php foreach ($result as $data): ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $data['username'] ?>
            </h4>
            <p class="card-text">
                <?php echo $data['post'] ?>
            </p>
            <div class="btn-group float-right">
                <a href="?page=updatePost.php&id=<?php echo $data['blog_id']; ?>" 
                    class="btn btn-outline-success" title="Edit"><i class="fa fa-edit"></i></a>
                <a href="?page=deletePost.php&id=<?php echo $data['blog_id']; ?>" 
                    class="btn btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></a>
            </div>
            <div class="card-footer">
                Date: <?php echo  $data['post_at'] ?>
            </div>
        </div>
    </div>
    <hr>
    <?php endforeach; ?>
</main>



<?php
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]". "<br>";


echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("m-d-Y") . "<br>";
echo date("l");

?>