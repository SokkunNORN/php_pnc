
<main class="container">
    <div class="card">
        <div class="card-header text-center">
            Create New Post
        </div>
        <div class="card-body">
            <form action="insertPost.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Username" name="username" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <textarea name="post" cols="30" rows="10" class="form-control" 
                    placeholder="Contant post" required></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-info" type="submit" name="btn-post">Create New Post</button>
                    <a href="?page=blog" class="btn btn-outline-danger float-right">Cancel New Post</a>
                </div>
            </form>
        </div>
    </div>
</main>