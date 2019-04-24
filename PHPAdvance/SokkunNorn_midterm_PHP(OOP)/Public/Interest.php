
<link rel="stylesheet" href="../src/css/bootstrap.min.css">

<?php

$capital=0;
$duration=0;
$rate=0;
if(isset($_POST['btn-cal'])) {
    $capital = $_POST['capital'];
    $rate = $_POST['rate'];
    $duration = $_POST['duration'];
}

include_once "Calculate.php";
$interest = new Calculate;
?>

<body class="bg-secondary">

  <div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Result</h3>
                    <hr>
                    <p>Yor borrow us <?php echo $capital; ?>$</p>
                    <p>Your interest is <?php echo $rate; ?>%</p>
                    <p>The duration is <?php echo $duration; ?>mouth</p>
                    <hr>
                    <p>So yor have to pay back <?php echo $interest->cal($capital, $rate, $duration);?>$</p>
                    <p>Yor payment/mouth is <?php echo $interest->totalMoney($capital, $rate, $duration);?>$</p>
                    <p>Your tatal interest is <?php echo $interest->payMentPerMonth($capital, $rate, $duration);?>$</p>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
  </div>
