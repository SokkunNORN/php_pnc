
<?php
include_once "process/connect.php";
$query = "SELECT * FROM tbl_post";
$read = mysqli_query($conn, $query);
include_once "layout/header.php";
?>
<body>

    <div class="navbar-fixed">
        <nav class="nav-wrapper blue-grey darken-3">
            <div class="container">
                <a href="#!" class="brand-logo">
                    <i class="material-icons">school</i>
                </a>
                <a href="#!" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="navbar" class="right hide-on-med-and-down">
                    <li><a href="#!">Home</a></li>
                    <li><a href="#!">About</a></li>
                    <li><a href="#!">Service</a></li>
                    <li>
                        <a href="#!" class="btn-floating z-depth-0 grey">
                            <i class="material-icons">person</i>
                        </a>
                    </li>
                    <li>
                        <a href="process/add.php" class="waves-effect waves-light btn-small grey">
                            <i class="material-icons left">add</i>Post
                        </a>
                    </li>
                    <li>
                        <a id="edit_post" class="waves-effect waves-light btn-small teal">
                            <i class="material-icons left">border_color</i>Post
                        </a>
                        <a id="done" class="waves-effect waves-light btn-small teal">
                            <i class="material-icons left">done</i>Done
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-menu">
        <li><a href="#!">Home</a></li>
        <li><a href="#!">About</a></li>
        <li><a href="#!">Service</a></li>
    </ul>

    <div class="container">
        <h1 class="center">New Post</h1>
        <div class="row">

            <?php
                foreach ($read as $value) :
            ?>

            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <h5><?php echo $value['title']; ?></h5>
                    </div>
                    <div class="card-image">
                        <img src="img/lap.jpg" alt="">
                        <span class="card-title"><?php echo $value['title']; ?></span>
                    </div>
                    <div class="card-content">
                        <p><?php echo $value['description']; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="process/del.php?id=<?php echo $value['post_id']; ?>" 
                            class="red btn" title="Delete Post">
                            <i class="material-icons">delete</i>
                        </a>
                        <a href="process/update.php?id=<?php echo $value['post_id']; ?>" 
                            class="blue-grey darken-3 btn" title="Edit Post">
                            <i class="material-icons">border_color</i>
                        </a>
                    </div>
                </div>
            </div>
            
            <?php
                endforeach;
            ?>
            
        </div>
    </div>
<?php
include_once "layout/footer.php";
?>
