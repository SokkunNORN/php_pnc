<?php
$studentInfo = array(
    array('id'=>'PNC2019-01','firstname'=>'chem','lastname'=>'sreynech','email'=>'sreynech@gmail.com'),
    array('id'=>'PNC2019-02','firstname'=>'chhoeng','lastname'=>'ramekh','email'=>'ramekh@gmail.com'),
    array('id'=>'PNC2019-03','firstname'=>'chuong','lastname'=>'sophanna','email'=>'sophanna@gmail.com'),
    array('id'=>'PNC2019-04','firstname'=>'duch','lastname'=>'samai','email'=>'samai@gmail.com'),
    array('id'=>'PNC2019-05','firstname'=>'doung','lastname'=>'dara','email'=>'dara@gmail.com'),
    array('id'=>'PNC2019-06','firstname'=>'hor','lastname'=>'chenda','email'=>'chenda@gmail.com'),
    array('id'=>'PNC2019-07','firstname'=>'in','lastname'=>'chaom','email'=>'chaom@gmail.com'),
    array('id'=>'PNC2019-08','firstname'=>'khao','lastname'=>'kimsien','email'=>'kimsien@gmail.com'),
    array('id'=>'PNC2019-09','firstname'=>'kol','lastname'=>'sokvibol','email'=>'sokvibol@gmail.com'),
    array('id'=>'PNC2019-10','firstname'=>'nai','lastname'=>'chanmohakosorl','email'=>'chanmohakosorl@gmail.com'),
    array('id'=>'PNC2019-11','firstname'=>'nang','lastname'=>'sinat','email'=>'sinat@gmail.com'),
    array('id'=>'PNC2019-12','firstname'=>'nanh','lastname'=>'bunsin','email'=>'bunsin@gmail.com'),
    array('id'=>'PNC2019-13','firstname'=>'neang','lastname'=>'sovanthai','email'=>'sovanthai@gmail.com'),
    array('id'=>'PNC2019-14','firstname'=>'norn','lastname'=>'sok kun','email'=>'sokkun@gmail.com'),
    array('id'=>'PNC2019-15','firstname'=>'phal','lastname'=>'hoach','email'=>'hoach@gmail.com'),
    array('id'=>'PNC2019-16','firstname'=>'pho','lastname'=>'sith','email'=>'sith@gmail.com'),
    array('id'=>'PNC2019-17','firstname'=>'rim','lastname'=>'virak','email'=>'virak@gmail.com'),
    array('id'=>'PNC2019-19','firstname'=>'koeuy','lastname'=>'kay','email'=>'kay@gmail.com'),
    array('id'=>'PNC2019-20','firstname'=>'soeun','lastname'=>'sreykhuoch','email'=>'sreykhuoch@gmail.com'),
    array('id'=>'PNC2019-21','firstname'=>'songha','lastname'=>'sam oun','email'=>'samoun@gmail.com'),
    array('id'=>'PNC2019-22','firstname'=>'sor','lastname'=>'sreyem','email'=>'sreyem@gmail.com'),
    array('id'=>'PNC2019-23','firstname'=>'sot','lastname'=>'kunthea','email'=>'kunthea@gmail.com'),
    array('id'=>'PNC2019-24','firstname'=>'sreng','lastname'=>'hany','email'=>'hany@gmail.com'),
    array('id'=>'PNC2019-25','firstname'=>'vong','lastname'=>'pharim','email'=>'pharim@gmail.com')

);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>foreach</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            <?php
                foreach($studentInfo as $info):
            ?>
                <tr>
                    <td>
                        <?php
                            echo $info['id'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $info['firstname'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $info['lastname'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $info['email'];
                        ?>
                    </td>
                </tr>
            <?php
                endforeach;
            ?>
        </table>
    </div>
</body>
</html>