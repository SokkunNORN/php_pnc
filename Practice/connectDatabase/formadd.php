

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-light shadow-lg">
                <div class="card-header text-center">Add student</div>
                <div class="card-body">
                    <form action="processadd.php" method='post'>
                        <div class="form-group">
                            <input type="text" name='student' class="form-control" placeholder='Username' required>
                        </div>
                        <div class="form-group">
                            <input type="email" name='email' placeholder='Email Stedent' class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name='province' placeholder='Province Stedent' class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block">Add New</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>