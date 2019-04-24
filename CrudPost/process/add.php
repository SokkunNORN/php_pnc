
<?php

include_once "connect.php";
include_once "../layout/header.php";
include_once "../layout/navProcess.php";

?>
<br>    
<div class="contaniner">
<div class="row">
    <div class="col s3"></div>
    <form class="col s6 grey" action="#" method="POST">
        <h4 class="center">Add Post</h4>
        <hr>
      <div class="row">
        <div class="input-field col s12">
          <input id="text" type="text" name="title" class="validate white-text" required>
          <label for="password" class="white-text">Title:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="text" type="text" name="description" class="validate white-text" required>
          <label for="email" class="white-text">Description:</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <a href="../index.php" class="btn red col s6" title="Cancel">
            <i class="material-icons left">close</i>Cancel Post
          </a>
          <button class="btn  blue-grey darken-3 col s6" name="btn-add" title="New Post">
            <i class="material-icons left">add</i>Add Post
          </button>
        </div>
      </div>
    </form>
  </div>
        
</div>
<br>
<br>

<?php 

if(isset($_POST['btn-add'])) {
  $title = $_POST['title'];
  $des = $_POST['description'];
  $query = "INSERT INTO tbl_post (title, description) VALUES('$title', '$des')";
  $create = mysqli_query($conn, $query);
  if($create) {
    header("location: ../index.php");
  } else {
    echo "game over";
  }
}

include_once "../layout/footer.php";
?>