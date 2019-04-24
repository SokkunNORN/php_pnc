
<?php include_once "connect.php"; ?>

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <a href="index.php" title="Go back"><i class="material-icons text-info">arrow_back</i></a>
                    <hr>
                    <form action="proccessAdd.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" placeholder="Age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-info" name="btn-add">Add New</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>





