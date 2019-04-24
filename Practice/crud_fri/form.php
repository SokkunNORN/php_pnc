

<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card bg-light shadow-sm">
                <div class="card-header text-center">
                    Add new friend
                </div>
                <div class="card-body">
                    <form action="processAdd.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name Friend" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" value="Male" checked>Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" value="Female">Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Age Friend" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Location Friend" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="btn btn-outline-danger" style="width:49%;">Cancle</a>
                            <button class="btn btn-outline-info" name="btn-add" type="submit" style="width:49%;">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
