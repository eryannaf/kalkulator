<?php

if(array_key_exists('name', $_GET) && strlen($_GET['name']) > 0) {
    echo '<p>Saya bernama '.$_GET['name'].', saya berusia '.$_GET['age'].' tahun.<p>';
    die();
}

if(array_key_exists('name', $_POST) && strlen($_POST['name']) > 0) {
    echo '<p>Saya bernama '.$_POST['name'].', saya berusia '.$_POST['age'].' tahun.<p>';
    die();
}

?>