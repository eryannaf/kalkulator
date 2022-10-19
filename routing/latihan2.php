<?php

if(array_key_exists('name', $_GET) && strlen($_GET['name']) > 0) {
    echo '<p>Saya Bernama '.$_GET['name'].'<br> Tempat Lahir: '.$_GET['age'];
    echo '<p>Tanggal Lahir: '.$_GET['tgllhr'].'</p>';
    echo 'Alamat: '.$_GET['alamat'];
    echo 'Jenis Kelamin: '.$_GET['gender'];
    echo 'Asal Sekolah: '.$_GET['asal'];
    echo 'Nilai UAN: '.$_GET['nilai'];

    die();
}

if(array_key_exists('name', $_POST) && strlen($_POST['name']) > 0) {
    echo '<p>Saya Bernama '.$_POST['name'].'<br> Tempat Lahir: '.$_POST['age'];
    echo '<p>Tanggal Lahir: '.$_POST['tgllhr'].'</p>';
    echo 'Alamat: '.$_POST['alamat'];
    echo 'Jenis Kelamin: '.$_POST['gender'];
    echo 'Asal Sekolah: '.$_POST['asal'];
    echo 'Nilai UAN: '.$_POST['nilai'];
    die();
}


?>