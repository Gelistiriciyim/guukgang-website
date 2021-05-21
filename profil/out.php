<?php
include 'core/core.php';
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:login.php")
?>
