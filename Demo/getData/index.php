<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get data</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-header text-center">
                Get Info
            </div>
            <div class="card-body">
                <form action="process.php" method='POST'>
                    <div class="form-check">
                        <input type='radio' name='gender' class="form-check-input" value='Male' >Male
                    </div>
                    <div class="form-check">
                        <input type="radio" name='gender' class="form-check-input" value='Female' checked>Female
                    </div>
                    <hr>
                    <div class="form-group">
                        <select name="subject" id="" class="form-control">
                            <option value="PHP">PHP</option>
                            <option value="Java">Java</option>
                            <option value="Database">Database</option>
                            <option value="Lavarel">Lavarel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" name='btn-submit'>Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>