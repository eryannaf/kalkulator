<?php

$tb = $_POST['tb'];
$bb = $_POST['bb'];

$x=($tb-100);
$y=$x-(0.1*$x);
$bbi=$bb-$y;

if($bbi < 2) {
    $status = 'Normal';
} else {
    $status = 'Tidak Normal';
}

require_once('../layout/head.php');
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h6>Berat Badan Anda <?= $status ?></h6>
            <h6>Berat Badan Ideal <?= $y ?></h6>
    
            <a href="./../beratbadan.php" class="btn btn-info">Kembali</a>
        </div>
    </div>
</div>
<?php

require_once('../layout/footer.php');
?>