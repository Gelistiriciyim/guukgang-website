<?php
error_reporting(0);
include '../core/core.php';

$link = mysqli_connect("localhost", "guukgfmb_db","tq*0Yr1Ed;[w");
$database = mysqli_select_db($link, "guukgfmb_db");

$login  = strip_tags($_GET["login"]);
$tables = "userdatabase";
$tables2 = "subscriptions";
$cur_time = time();
$to_time = strtotime('31-12-2020');
$time = $to_time - $cur_time;
$durum = 0;

$sql = "SELECT * FROM subscriptions WHERE login = '$login'" ;

$result = $link->query($sql);
if ($result->num_rows > 0) {
    // Outputting the rows
    while($row = $result->fetch_assoc())
    {
     $kalanzaman = $row['time_left'];
     $grup = $row['status'];

     $math = $kalanzaman - time();
     $tarih = ($math * 24 * 60);
     $tarih = round($tarih);
  
     if($tarih>0){
        $myVar2 = htmlspecialchars("1", ENT_QUOTES); 
     }elseif($tarih<=0){
        $myVar2 = htmlspecialchars("0", ENT_QUOTES); 
     }else{
        $myVar2 = htmlspecialchars("0", ENT_QUOTES); 
     }

     echo($myVar2);
    }
}else{
    
    echo htmlspecialchars("0", ENT_QUOTES);
} 
?>