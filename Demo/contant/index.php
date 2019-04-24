<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <script src="main.js"></script> -->
</head>
<body>
    
    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-header">
                contact form
            </div>
            <div class="card-body">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <input type="text" name='username' placeholder='Username...' class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder='Enter your message...'></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type ='submit' name='btn-message'>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>