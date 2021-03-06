
<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Pre final exam</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Battambang" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="grey lighten-2">
    <div class="section container" id="add-info">
       <div class="row">
           <div class="col col12 m12 l5">
               <form action="#" method="POST">
                   <div class="input-field">
                       <i class="material-icons prefix">person</i>
                       <input type="text" name="name" id="text-name"  maxlength="25" required>
                       <label for="text-name">Username</label>
                   </div>
                   <p>
                       <label>
                        <input class="with-gap" name="gender" type="radio" value="Male" checked/>
                        <span>Male</span>
                      </label>
                    </p>
                   <p>
                    <label>
                        <input class="with-gap" name="gender" type="radio"  value="Female"/>
                        <span>Female</span>
                      </label>
                    </p>
                    <div class="input-field">
                            <i class="material-icons prefix">message</i>
                        <textarea name="message" id="sms" class="materialize-textarea" required></textarea>
                        <label for="sms">Message</label>
                        
                    </div>
                    <a  class="btn left" href="../index.php">
                        <span>Back</span>
                        <i class="material-icons left">arrow_back</i>
                    </a>
                    <button class="btn right" type="submit" name="btn-add"> 
                        <span>Add User</span>
                        <i class="material-icons right">add person</i>
                    </button>
               </form>
           </div>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['btn-add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mess = $_POST['message'];

    $query = "INSERT INTO tbl_user (username, user_gender, user_message) 
        VALUES ('$name', '$gender', '$mess') ";
    $create = mysqli_query($conn, $query);

    if($create) {
        header("location: ../index.php");
    } else {
        echo "game over";
    }
}

?>