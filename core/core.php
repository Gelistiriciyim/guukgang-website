<?php

try {
  $vt= new PDO("mysql:host=localhost;dbname=guukgfmb_db;charset=utf8","guukgfmb_db","tq*0Yr1Ed;[w");
} catch (PDOException $e) {
  echo $e->getMessage();
}

date_default_timezone_set('Europe/Istanbul');
session_start();
ob_start();
error_reporting(0);
?>
