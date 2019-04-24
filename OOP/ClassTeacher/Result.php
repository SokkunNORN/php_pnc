
<?php

include_once "Benjamin.php";
include_once "Rady.php";
include_once "Rith.php";
include_once "Channak.php";

$benjamin = new Benjamin();
$benjamin->setName("Benjamin");
$benjamin->setNational("Franch");
$benjamin->setPosition("Web_training");
$benjamin->setAge(32);
$benjamin->setProvince("PhmonPenh");

$rady = new Rady();
$rady->setName("Rady");
$rady->setNational("Khmer");
$rady->setPosition("Web_training");
$rady->setAge(23);
$rady->setProvince("Bangteymanchey");

$rith = new Rith();
$rith->setName("Rith");
$rith->setNational("Khmer");
$rith->setPosition("Web_training");
$rith->setAge(22);
$rith->setProvince("Batdombong");

$channak = new Channak();
$channak->setName("Channak");
$channak->setNational("Khmer");
$channak->setPosition("Web_training");
$channak->setAge(31);
$channak->setProvince("Batdombong");

?>

<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" 
        href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<div class="container-fluid mt-4 mb-5">
    <div class="card bg-ligth">
        <div class="card-header text-center shadow-sm">
            List Table Teacher In PNC
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Province</th>
                        <th>National</th>
                        <th>Position</th>
                        <th>Other</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $benjamin->getName(); ?></td>
                        <td><?php echo $benjamin->getAge(); ?></td>
                        <td><?php echo $benjamin->getProvince(); ?></td>
                        <td><?php echo $benjamin->getNational(); ?></td>
                        <td><?php echo $benjamin->getPosition(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?php echo $channak->getName(); ?></td>
                        <td><?php echo $channak->getAge(); ?></td>
                        <td><?php echo $channak->getProvince(); ?></td>
                        <td><?php echo $channak->getNational(); ?></td>
                        <td><?php echo $channak->getPosition(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?php echo $rith->getName(); ?></td>
                        <td><?php echo $rith->getAge(); ?></td>
                        <td><?php echo $rith->getProvince(); ?></td>
                        <td><?php echo $rith->getNational(); ?></td>
                        <td><?php echo $rith->getPosition(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?php echo $rady->getName(); ?></td>
                        <td><?php echo $rady->getAge(); ?></td>
                        <td><?php echo $rady->getProvince(); ?></td>
                        <td><?php echo $rady->getNational(); ?></td>
                        <td><?php echo $rady->getPosition(); ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Province</th>
                        <th>National</th>
                        <th>Position</th>
                        <th>Other</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>



