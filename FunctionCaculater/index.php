<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculater</title>
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card bg-secondary shadow-lg">
                    <div class="card-header text-center">
                        <h1 class="text-white">Simple Casio</h1>
                    </div>
                    <div class="card-body">
                        <form action="#" method='POST'>
                            <div class="form-group">
                                <input type="number" name='num1' placeholder='Enter Number 1' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name='num2' placeholder='Enter Number 2' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type='submit' name='btn-multi'>( x ) Multiple</button>
                                <button class="btn btn-success" type='submit' name='btn-plug'>( + ) Plus</button>
                                <button class="btn btn-danger" type='submit' name='btn-manus'>( - ) Minus</button>
                                <button class="btn btn-warning" type='submit' name='btn-devide'>( / ) Divide</button>
                            </div>
                        </form>
                    </div>
                </div>

                <br>

                <div class="card bg-info">
                    <div class="card-header text-center shadow-md">
                        <h1 class="text-white">Result</h1>
                    </div>
                    <div class="card-body text-center text-white">
                        <h1>
                            <?php 
                                if(empty($_POST['num1']) && empty($_POST['num2'])) {
                                    echo "Empty Field !";
                                } else if (empty($_POST['num1']) || empty($_POST['num2'])) {
                                    echo "Please Input all information !";
                                } else {
                                    $number1 = $_POST['num1'];
                                    $number2 = $_POST['num2'];

                                    // plug number
                                    if(isset($_POST['btn-plug'])) {  
                                        function plugNumber($n1, $n2) {
                                            return $n1 + $n2;
                                        }
                                        echo $number1 . " + " . $number2 . " = " . plugNumber($number1, $number2);
                                    }

                                    // manus number
                                    if(isset($_POST['btn-manus'])) {  
                                        function plugNumber($n1, $n2) {
                                            return $n1 - $n2;
                                        }
                                        echo $number1 . " - " . $number2 . " = " . plugNumber($number1, $number2);
                                    }

                                    // mutiple number
                                    if(isset($_POST['btn-multi'])) {  
                                        function plugNumber($n1, $n2) {
                                            return $n1 * $n2;
                                        }
                                        echo $number1 . " x " . $number2 . " = " . plugNumber($number1, $number2);
                                    }

                                    // devide  number
                                    if(isset($_POST['btn-devide'])) { 
                                        if ($number1 == 0 || $number2 == 0) {
                                            echo "System cannot excecute !";
                                        } else {
                                            function plugNumber($n1, $n2) {
                                                return $n1 / $n2;
                                            }
                                            echo $number1 . " / " . $number2 . " = " . plugNumber($number1, $number2);
                                        }
                                    }
                                }
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-3"></div> 
        </div>
    </div>
</body>
</html>