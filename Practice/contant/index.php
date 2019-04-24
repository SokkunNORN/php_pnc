


<html>
    <head>
        <title>practice</title>
        <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card bg-light shadow-lg">
                        <div class="card-header">
                            Form Contact
                        </div>
                        <div class="card-body">
                            <form action="process.php" method='post'>
                                <div class="form-group">
                                    <input type="text" name='username' placeholder='Enter Username...' class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name='email' placeholder='Enter Email...' class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name='pass' placeholder='Enter Password...' class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type='submit' name='btn-message'>Send</button>
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