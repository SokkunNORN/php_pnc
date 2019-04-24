
<?php

include_once "connect.php";
include_once "../layout/header.php";
include_once "../layout/navProcess.php";

$query = "SELECT * FROM tbl_post WHERE post_id = " . $_GET['id'];
$select = mysqli_query($conn, $query);

?>


<br>    
<div class="contaniner">
<div class="row">
    <div class="col s3"></div>
    <?php
        foreach ($select as $value) :
    ?>
    <form class="col s6 grey" action="#" method="POST">
        <h4 class="center">Update Post</h4>
        <hr>
      <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" value="<?php echo $value['title']; ?>"
            class="validate white-text" required>
          <label for="password" class="white-text">Title:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="description" type="text" name="description" value="<?php echo $value['description']; ?>"
            class="validate white-text" required>
          <label for="email" class="white-text">Description:</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <a href="../index.php" class="btn red col s6" title="Cancel Update">
            <i class="material-icons left">close</i>Cancel Post
          </a>
          <button class="btn  blue-grey darken-3 col s6" name="btn-edit" title="Update Post">
            <i class="material-icons left">refresh</i>Update Post
          </button>
        </div>
      </div>
    </form>
    <?php
        endforeach;
    ?>
  </div>
        
</div>
<br>
<br>

<?php

if(isset($_POST['btn-edit'])) {
    $title = $_POST['title'];
    $des = $_POST['description'];
    $query = "UPDATE tbl_post SET title='$title', description='$des' WHERE post_id= " . $_GET['id'];
    $update = mysqli_query($conn, $query);
    if($update) {
        header("location: ../index.php");
    } else {
        echo "game over";
    }
}

include_once "../layout/footer.php";
?>

