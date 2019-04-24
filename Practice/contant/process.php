<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
   <a class="navbar-brand abs" href="#">Contant:</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="navbar-collapse collapse" id="collapsingNavbar">
       <ul class="navbar-nav">
           <li class="nav-item active">
               <a class="nav-link" href="#">Home</a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="#">About</a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="#">Sale</a>
           </li>
       </ul>
       <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <?php 
                        if(isset($_POST['username']) && !empty($_POST['username'])) {
                            echo $_POST['username'];
                        }else{
                            header('Locataion: index.php');
                        }                        
                    ?>
                </a>
            </li>
           <li class="nav-item">
               <a class="nav-link active" href="index.php">Log out</a>
           </li>
       </ul>
   </div>
</nav>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 