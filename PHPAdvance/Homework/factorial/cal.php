
<?php

include "src/calculate.php";

if(isset($_POST['btn-fa'])) {
    $fac = $_POST['factorial'];
    $fa = new Calculate($fac);
?>
    
                <div class="card-footer bg-white">
                    Result of <?php echo $fac; ?>!
                    <p>is <?php echo $fa->factorial(); ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php
} else {
?>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
</div>

<?php
}