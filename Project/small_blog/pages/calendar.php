
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
        <li><a href="buget.php">Buget</a></li>
        <li><a href="future_place.php">Future Place</a></li>
        <li class="active"><a href="calendar.php">Schedule</a></li>
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

<!-- body here -->
<div class="container">
    <div id="calendar">
    </div>
</div>

<br><br><br>

<!-- footer -->
<?php
    include_once "../layout/footer.php";
?>

