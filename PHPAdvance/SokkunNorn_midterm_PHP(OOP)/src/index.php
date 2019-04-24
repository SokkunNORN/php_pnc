
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank interest simulator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-secondary">

  <div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Calculate Interest</h3>
                    <hr>
                    <form action="../Public/Interest.php" method="post">
                        <div class="form-group">
                            <label for="">Capital</label>
                            <input type="number" name="capital" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Interest Rate</label>
                            <input type="number" name="rate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="number" name="duration" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="btn-cal">Calculate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
  </div>

</body>
</html>








