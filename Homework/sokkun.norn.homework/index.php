<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card bg-success">
                <div class="card-header text-center">
                    Form Data
                </div>
                <div class="card-body">
                    <form action="" method='POST'>
                        <div class="form-group">
                            <input type="text" name='username' placeholder='Username' class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name='email' placeholder='Email' class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" class='form-control' placeholder='Message' cols="30" rows="10"></textarea>    
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name='subject[]' value='Facebook' class="form-input-check" checked> Facebook
                            <input type="checkbox" name='subject[]' value='Youtube' class="form-input-check"> Youtube
                            <input type="checkbox" name='subject[]' value='Twitter' class="form-input-check"> Twitter
                        </div>
                        <br>
                        <div class="form-group">
                            <select name="choice" id="" class="form-control">
                                <option value="Teacher">Teacher</option>
                                <option value="Student">Student</option>
                                <option value="Security Card">Security Card</option>
                                <option value="Cleaner">Cleaner</option>
                            </select>
                        </div>
                        <div class="form-check">    
                            <div class="form-check-inline">
                                <lable class="form-check-lable" for='radio1'>
                                    <input type="radio" class="form-check-input" name='sex' value='Male' id="radio1" checked>Male
                                </lable>
                            </div>
                            <div class="form-check-inline">
                                <lable class="form-check-lable" for='radio2'>
                                    <input type="radio" class="form-check-input" name='sex' value='Female' id="radio2">Female
                                </lable>
                            </div>
                            <div class="form-check-inline">
                                <lable class="form-check-lable" for='radio3'>
                                    <input type="radio" class="form-check-input" name='sex' value='Other' id="radio3">Other
                                </lable>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-block btn-outline-dark" name='btn-submit' type='submit'>Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
        
    </div>

    <?php
        if(isset($_POST['btn-submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            $choice = $_POST['choice'];
            $gander = $_POST['sex'];
    ?>

    <div class="container mt-4">
        <ul class="list-group shadow-lg bg-light">
            <li class="list-group-item"><?php echo $username ?></li>
            <li class="list-group-item"><?php echo $email ?></li>
            <li class="list-group-item">
                <?php foreach($subject as $value) { ?>
                    <?php echo $value.',' ?>
                <?php }?>
            </li>
            <li class="list-group-item"><?php echo $choice ?></li>
            <li class="list-group-item"><?php echo $gander ?></li>
        </ul>
        <br>
        <div class="card bg-light shadow-lg">
            <div class="card-header">Message</div>
            <div class="card-body">
                <?php echo $message ?>
            </div>
        </div>
    </div>

    <?php
        }
    ?>

</body>
</html>