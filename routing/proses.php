<?php
$usernamelogin = "eryan";
session_start();

$username=$_POST['username'];

if ($username==$usernamelogin) {
    $_SESSION['username']=$username;
    header('location: ./../dashboard.php');
} else {
    header('location: ./../loginsession.php');
}
?>