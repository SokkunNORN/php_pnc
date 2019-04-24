<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get check box</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-light shadow-lg">
            <div class="card-header">Get value form checkbox</div>
            <div class="card-body">
                <form action="process.php" method='post'>
                    <div class="form-check">
                        <input type="checkbox" name='subject[]' class="form-input-check" value="PHP" checked> PHP
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name='subject[]' class="form-input-check" value='Laravel'> Laravel
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name='subject[]' class="form-input-check" value='Java'> Java
                    </div><div class="form-check">
                        <input type="checkbox" name='subject[]' class="form-input-check" value='Database'> Database
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name='subject[]' class="form-input-check" value='C program'> C program
                    </div>
                    <div class="form-check">
                        <button class="btn btn-outline-warning btn-block mt-4" type='submit' name='btn-submit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>