
<?php
    echo '1. Write PHP code to loop number from 1 to 10 and display only even number.<br>';
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i.' ';
        }
    }
    echo '<br><br>';
?>

<?php
    $student = array (
        array ('number'=>'1','name'=>'Chantha','age'=>'30','province'=>'Battambong'),
        array ('number'=>'2','name'=>'Samnang','age'=>'50','province'=>'Battambong'),
        array ('number'=>'3','name'=>'Kimsoeng','age'=>'40','province'=>'BMC'),
        array ('number'=>'4','name'=>'Sarann','age'=>'30','province'=>'Pursat')
    );
    echo '2. Write PHP code to loop all students information from provided array and display in table.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework1</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Province</th>
            </tr>
            <?php
                foreach($student as $result) {
            ?>
                <tr>
                    <td>
                        <?php echo $result['number']; ?>
                    </td>
                    <td>
                        <?php echo $result['name']; ?>
                    </td>
                    <td>
                        <?php echo $result['age']; ?>
                    </td>
                    <td>
                        <?php echo $result['province']; ?>
                    </td>
                </tr>
            <?php 
                };
            ?>
        </table>
    </div>
</body>
</html>