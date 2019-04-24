<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card bg-light shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="uname" class="form-control" placeholder="Username">
                        </div>
                        <!-- input email -->
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" placeholder="Email">
                        </div>
                        <!-- Select province -->
                        <div class="form-group">
                            <select name="chice" class="form-control">
                                <option value="Banteaymeanchey">Banteaymeanchey</option>
                                <option value="Battambang">Battambang</option>
                                <option value="Preh Vihear">Preh Vihear</option>
                                <option value="Siem Reap">Siem Reap</option>
                                <option value="Phnom Penh">Phnom Penh</option>
                            </select>
                        </div>
                        <!-- input phone number -->
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <!-- input gender -->
                        <div class="form-check-inline">
                            <input type="radio" name="gender" class="form-check-input" value="Male">Male
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" class="form-check-input" value="Female">Female
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" class="form-check-input" value="Others">Others
                        </div>
                        <br>
                        <br>
                        <!-- input Status -->
                        <div class="form-check-inline">
                            <input type="checkbox" name="subject[]" class="form-check-input" value="Single">Single
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" name="subject[]" class="form-check-input" value="Engaged">Engaged
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" name="subject[]" class="form-check-input" value="Married">Married
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" name="subject[]" class="form-check-input" value="Divorced">Divorced
                        </div>
                        <br>
                        <br>
                        <!-- Describe what your mind -->
                        <div class="form-group">
                            <textarea name="message" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <!-- button submit and reset -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn-result">Submit Infomation</button>
                            <button class="btn btn-warning float-right" type="reset" name="">Cancel Infomation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<?php 

if (isset($_POST['btn-result'])) {

$uname = $_POST['uname'];
$mail = $_POST['mail'];
$province = $_POST['chice'];
$phone = $_POST['phone'];
$message = $_POST['message'];

    if ($uname == "" || $mail == "" || $province == "" || $phone == "" || $message == "") {
?>
<h3 class="text-center text-danger">Noted: all field cannot empty</h3>
<?php 
    } else {
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
?>
<div class="container mt-4">
    <ul class="list-group">
        <li class="list-group-item">
            <?php echo $uname; ?>
        </li>
        <li class="list-group-item">
            <?php echo $mail; ?>
        </li>
        <li class="list-group-item">
            <?php echo $province; ?>
        </li>
        <li class="list-group-item">
            <?php echo $phone; ?>
        </li>
        <li class="list-group-item">
            <?php echo $gender; ?>
        </li>
        <li class="list-group-item">
            <?php 
                foreach ($subject as $value) {
                    echo $value." ";
                }
            ?>
        </li>
        <li class="list-group-item">
            <?php echo $message; ?>
        </li>
    </ul>
</div>

<?php

    }

}; ?>