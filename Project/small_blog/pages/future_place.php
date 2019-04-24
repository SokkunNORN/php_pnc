
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
        <li class="active"><a href="#!">Future Place</a></li>
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
    <h4 class="center hide-on-med-and-down">One thing that I need!</h4>
    
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="../images/items1.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="../images/items2.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="../images/items3.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="../images/items4.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="../images/items5.jpg"></a>
    </div>

    <div class="row">
        <div class="col s12 m6 l6 xl6">
            <div class="card">
                <div class="card-image">
                    <img class="activator" src="../images/background3.jpg">
                    <a href="#!" class="halfway-fab btn-floating pink pulse">
                        <i class="material-icons">favorite</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Carton box
                      <i class="material-icons right" title="Read More">more_vert</i>
                    </span>
                    <p><a href="#!"><i class="material-icons teal-text">thumb_up</i></a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Carton box
                      <i class="material-icons right">close</i>
                    </span>
                    <p>Here is some more information about this product that is only revealed once clicked on.
                    </p>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6 xl6">
            <div class="card">
                <div class="card-image">
                    <img class="activator" src="../images/background3.jpg">
                    <a href="#!" class="halfway-fab btn-floating pink pulse">
                        <i class="material-icons">favorite</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Carton box
                      <i class="material-icons right" title="Read More">more_vert</i>
                    </span>
                    <p><a href="#!"><i class="material-icons teal-text">thumb_up</i></a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Carton box
                      <i class="material-icons right">close</i>
                    </span>
                    <p>Here is some more information about this product that is only revealed once clicked on.
                    </p>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6 xl6">
            <div class="card">
                <div class="card-image">
                    <img class="activator" src="../images/background3.jpg">
                    <a href="#!" class="halfway-fab btn-floating pink pulse">
                        <i class="material-icons">favorite</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Carton box
                      <i class="material-icons right" title="Read More">more_vert</i>
                    </span>
                    <p><a href="#!"><i class="material-icons teal-text">thumb_up</i></a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Carton box
                      <i class="material-icons right">close</i>
                    </span>
                    <p>Here is some more information about this product that is only revealed once clicked on.
                    </p>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6 xl6">
            <div class="card">
                <div class="card-image">
                    <img class="activator" src="../images/background3.jpg">
                    <a href="#!" class="halfway-fab btn-floating pink pulse">
                        <i class="material-icons">favorite</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Carton box
                      <i class="material-icons right" title="Read More">more_vert</i>
                    </span>
                    <p><a href="#!"><i class="material-icons teal-text">thumb_up</i></a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Carton box
                      <i class="material-icons right">close</i>
                    </span>
                    <p>Here is some more information about this product that is only revealed once clicked on.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    include_once "../layout/footer.php";
?>






