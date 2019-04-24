<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method Get</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Get Data Form
            </div>
            <div class="card-body">
                <form action="process.php" method="POST">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="language[]" value="PHP"
                        class="form-check-input">PHP
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="language[]" value="Bootstrap"
                        class="form-check-input">Bootstrap
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="language[]" value="Java Programming"
                        class="form-check-input">Java Programming
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="language[]" value="MySQL"
                        class="form-check-input">MySQL
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block mt-4" type="submit" 
                       name="btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>