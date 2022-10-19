<?php

$age = $_POST['age'];

if($age <= 5) {
    $status = 'Balita / masih suci';
} elseif($age <= 16) {
    $status = 'Anak-anak / rawan kena kriminalitas';
} elseif($age <= 50) {
    $status = 'Dewasa / osok maksiat';
} else {
    $status = 'lansia / tobat';
}

require_once('../layout/head.php');
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h6>Selamat! Anda dinyatakan <?= $status ?>!!!!</h6>
    
            <a href="./../status.php" class="btn btn-info">Balik</a>
        </div>
    </div>
</div>
<?php

require_once('../layout/footer.php');
?>