<?php
    $student = array (
        array('name'=>'bopha','email'=>'bopha@gmail.com','password'=>'2929'),
        array('name'=>'lody','email'=>'lody@gmail.com','password'=>'%H&U%TR'),
        array('name'=>'sokkun','email'=>'sokkun@gmail.com','password'=>')(*&&^^%%$##'),
        array('name'=>'vannet','email'=>'vannet@gmail.com','password'=>'DXZែឬ%៛ែេះ'),
        array('name'=>'hongmeang','email'=>'hongmeang@gmail.com','password'=>'"៛%៛ជៃែឬទ"'),
        array('name'=>'vandet','email'=>'vandet@gmail.com','password'=>'+)(*&^%'),
        array('name'=>'likoung','email'=>'likoung@gmail.com','password'=>'~!@#~~'),
        array('name'=>'sreyleap','email'=>'sreyleap@gmail.com','password'=>'++}{|'),
        array('name'=>'kunty','email'=>'kunty@gmail.com','password'=>'"|{}_+"'),
        array('name'=>'phanha','email'=>'phanha@gmail.com','password'=>'(O)&^%'),
        array('name'=>'vanthai','email'=>'vanthai   @gmail.com','password'=>'^&*((')
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demoPHP</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-striped table-dark">
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
            <?php
                foreach($student as $value) {
            ?>
                <tr>
                    <td>
                        <?php
                            echo $value['name'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $value['email'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $value['password'];
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>