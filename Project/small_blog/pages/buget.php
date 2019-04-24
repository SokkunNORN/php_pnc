
<?php
    include_once "../layout/header.php";
?>

<body>

<!-- nav bar -->
<div class="navbar-fixed">
<nav class="light-blue darken-4 accent-4 navbar-fixed" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="../index.php" class="brand-logo"><i class="material-icons">school</i><a>
    <ul class="right hide-on-med-and-down">
      <li><a href="../index.php"><i class="material-icons">home</i></a></li>
      <li class="active"><a href="#!">Buget</a></li>
      <li><a href="future_place.php">Future Place</a></li>
      <li><a href="calendar.php">Schedule</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
</div>

<br>
<br>


<!-- =======icon go to top========= -->
<p class="btn grey" id="iconUp" title="Go top">
  <i class="material-icons">arrow_upward</i>
</p>

<div class="container">

  <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Money</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($arr as $value): ?>
        <tr>
          <td><?php echo $value['date']; ?></td>
          <td><?php echo $value['title']; ?></td>
          <td><?php echo $value['money']; ?> riel</td>
          <td>
          <!-- update -->
            <a href="../process/edit.php?id=<?php echo $value['id']; ?>" 
              name="edit-bg" title="Edit buget">
              <i class="material-icons text-info">edit</i>
            </a>
          <!-- delete -->
            <a href="../process/delete.php?id=<?php echo $value['id']; ?>" 
              type="btn" title="Delete buget">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>
        </tr>
        <?php 

        endforeach;

        $sum = 0;
        foreach ($arr as $money) {
          $sum += $money['money'];
        }
                        
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td>
            <a href="#modalAdd" class="btn-floating waves-effect waves-small btn modal-trigger" 
              title="Add buget">
              <i class="material-icons light-blue darken-4">add</i>
            </a>
          </td>
          <td><h6><u>Total:</u></h6></td>
          <td><h6><?php echo $sum; ?> riel</h6></td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </span></div>

  <!-- form dialog add buget -->
<div id="modalAdd" class="modal blue-grey darken-1">
  <div class="container">
    <h5 class="white-text">Buget Today</h5>
    <div class="col s1"></div>
      <div class="col s10">
        <hr>
      </div>
      <div class="col s1"></div>
        <form action="#" method="post" >
          <div class="input-field col s12">
            <input id="last_name" type="text" name="title" class="validate white-text" required>
            <label for="last_name">Title:</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="number" name="money" class="validate white-text" required>
            <label for="last_name">Money:</label>
          </div>
          <div class="col s6">
            <button class="modal-close waves-effect waves-green btn-flat red darken-3 white-text" 
              type="reset" title="Cancle buget">cancle
              <i class="material-icons left">close</i>
            </button>
            <button class="btn waves-effect waves-light white-text" title="More buget" 
              type="submit" name="add-bg">Add buget
              <i class="material-icons left">add</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <br>

<?php
include_once "../layout/footer.php";
?>




