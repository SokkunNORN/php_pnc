
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    
<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Add more text
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <textarea required placeholder="Message..." style="resize: none;" name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button name="btn-add" class="btn btn-block btn-outline-info">+ Add Text</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Result
                </div>
                <div class="card-body">
                    <?php
                        if (isset($_POST['btn-add'])) {
                            $text = $_POST['message'];
                            $nameFile= "message.txt";
                            $currentText = file_get_contents($nameFile); // select text in file
                            $currentText .=  $text; // plus old text and new text
                            file_put_contents($nameFile, $currentText); // delete old text in file before and add new text ($currentText).
                            echo $currentText;
                        }
                    ?>
                </div>
                <div class="card-footer text-center">
                    Thank you!!!
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>


<?php
                
    // read file text              
    // $file = file("message.txt");
    // foreach ($file as $line) {
    //     echo $line . "<br>";
    // }
                    
?>



