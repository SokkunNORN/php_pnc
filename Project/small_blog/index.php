
<?php
include_once "layout/headerIndex.php";
?>


<body>

  <!-- nav bar -->
<div class="navbar-fixed">
  <nav class="light-blue darken-4 accent-4 navbar-fixed" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><i class="material-icons">school</i><a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="#"><i class="material-icons">home</i></a></li>
        <li><a href="pages/buget.php">Buget</a></li>
        <li><a href="pages/future_place.php">Future Place</a></li>
        <li><a href="pages/calendar.php">Schedule</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center">Blog Private</h1>
        <div class="row center">
          <h5 class="header col s12">What you seeing is what you need. Making for update!</h5>
        </div>
        <div class="row center">
          <a href="pages/buget.php" id="download-button" class="btn-large waves-effect waves-light light-blue darken-4">
            Let's Start
          </a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/laptop.jpg" alt="Unsplashed background img 1"></div>
  </div>

<!-- =======icon go to top========= -->
<p class="btn grey" id="iconUp" title="Go top">
  <i class="material-icons">arrow_upward</i>
</p>

<!-- container -->
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Plan in future</h4>
          
              <ul class="collapsible popout" data-collapsible="accordion">

                <!-- table -->
                <li>
                  <div class="collapsible-header"><i class="material-icons">insert_chart</i>Target Buget</div>
                  <div class="collapsible-body"><span> 
                    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Date</th>
                              <th>Title</th>
                              <th>Money</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach($arr as $value): ?>
                        <tr>
                            <td><?php echo $value['date']; ?></td>
                            <td><?php echo $value['title']; ?></td>
                            <td><?php echo $value['money']; ?> riel</td>
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
                          <td><br><a href="pages/buget.php">Read More</a></td>
                          <td><h6><u>Total:</u></h6></td>
                          <td><h6><?php echo $sum; ?> riel</h6></td>
                      </tr>
                      </tfoot>
                    </table>
                  </span></div>
                </li>

                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Place for future</div>
                  <div class="collapsible-body">
                    <span>
                      <div class="container">
                        <h4 class="center hide-on-med-and-down">One thing that I need!</h4>
                          <div class="row">
                              <div class="col s12 m6 l6 xl6">
                                  <div class="card">
                                      <div class="card-image">
                                          <img class="activator" src="images/background3.jpg">
                                          <a href="pages/future_place.php" class="halfway-fab btn-floating pink pulse">
                                              <i class="material-icons">favorite</i>
                                          </a>
                                      </div>
                                      <div class="card-content">
                                          <span class="card-title activator grey-text text-darken-4">Carton box
                                              <i class="material-icons right">more_vert</i></span>
                                          <!-- <p><a href="#!"><i class="material-icons black-text">thumb_up</i></a></p> -->
                                      </div>
                                      <div class="card-reveal">
                                          <span class="card-title grey-text text-darken-4">Carton box
                                              <i class="material-icons right">close</i>
                                          </span>
                                          <p>Here is some more information about this product that is
                                              only revealed once clicked on.
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col s12 m6 l6 xl6">
                                  <div class="card">
                                      <div class="card-image">
                                          <img class="activator" src="images/background3.jpg">
                                          <a href="pages/future_place.php" class="halfway-fab btn-floating pink pulse">
                                              <i class="material-icons">favorite</i>
                                          </a>
                                      </div>
                                      <div class="card-content">
                                          <span class="card-title activator grey-text text-darken-4">Carton box
                                              <i class="material-icons right">more_vert</i></span>
                                          <!-- <p><a href="#!"><i class="material-icons black-text">thumb_up</i></a></p> -->
                                      </div>
                                      <div class="card-reveal">
                                          <span class="card-title grey-text text-darken-4">Carton box
                                              <i class="material-icons right">close</i>
                                          </span>
                                          <p>Here is some more information about this product that is
                                              only revealed once clicked on.
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </span>
                  </div>
                </li>
              </ul>

        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/time.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">insert_chart</i></h2>
            <h5 class="center">Buget</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">place</i></h2>
            <h5 class="center">Place for visit</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">playlist_add_check</i></h2>
            <h5 class="center">Schedule dialy life</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/calendar.jpg" alt="Unsplashed background img 3"></div>
  </div>

<?php
include_once "layout/footerIndex.php";
?>



