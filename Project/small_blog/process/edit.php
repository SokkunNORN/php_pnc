
<?php
include_once 'conn.php';
$query = "SELECT * FROM tbl_buget WHERE id = ".$_GET['id'];
$select = mysqli_query($conn, $query);
include_once "../layout/header.php";
?>

<nav class="light-blue darken-4 accent-4 navbar-fixed" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo">Blog<a>
    <ul class="right hide-on-med-and-down">
      <li><a href="../index.php"><i class="material-icons">home</i></a></li>
      <li class="active"><a href="../pages/buget.php">Buget</a></li>
      <li><a href="../pages/future_place.php">Future Place</a></li>
      <li><a href="../pages/schedule.php">Schedule</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>

<br>
<br>


<?php
foreach ($select as $value) :
?>

<div class="container blue-grey darken-1">
    <h5 class="white-text">Buget Today</h5>
    <div class="col s1"></div>
      <div class="col s10">
        <hr>
      </div>
      <div class="col s1"></div>
        <form action="#" method="post" >
          <div class="input-field col s12">
            <input id="last_name" type="text" name="title" 
            class="validate white-text" value="<?php echo $value['title'] ;?>" required>
            <label for="last_name">Title:</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="number" name="money" 
            class="validate white-text" value="<?php echo $value['money'] ;?>" required>
            <label for="last_name">Money:</label>
          </div>
          <div class="col s6">
            <a href="../pages/buget.php" class="btn waves-effect waves-light red white-text" 
              title="Cancel Update">Cancel
              <i class="material-icons left">close</i>
            </a>
            <button class="btn waves-effect waves-light white-text" title="Update buget" 
              type="submit" name="btn-update">Update buget
              <i class="material-icons left">add</i>
            </button>
          </div>
        </form>
        <br>
      </div>
    </div>
  </div>
  <br>
  <br>




<?php 

endforeach;

if (isset($_POST['btn-update'])) {
  $title = $_POST['title'];
  $money = $_POST['money'];
  $query  = "UPDATE tbl_buget SET title = '$title', money = '$money' WHERE id = ".$_GET['id'];
  $update = mysqli_query($conn, $query);
  if ($update) {
    header('Location: ../pages/buget.php');
  } else {
    echo "game over";
  }
}

include_once "../layout/footer.php";

?>
