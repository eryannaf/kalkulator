<?php
session_start();

unset($_SESSION['username']);

header("Location: http://localhost/jcc/loginsession.php");
