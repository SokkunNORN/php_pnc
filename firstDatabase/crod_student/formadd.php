
<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card bg-light shadow-lg">
                <div class="card-header text-center">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">
                    <form action="processadd.php" method='post'>
                        <div class="form-group">
                            <input type="text" name='student' class="form-control" placeholder='Username' required>
                        </div>
                        <div class="form-group">
                            <input type="email" name='email' class="form-control" placeholder='Email' required>
                        </div>
                        <div class="form-group">
                            <input type="text" name='province' class="form-control" placeholder='Province' required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name='btn-add' type='submit'>Add New Student</button>
                            <a href="index.php" class="btn btn-danger btn-block">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>