<?php

$servername = "localhost";

$username = "guukgfmb_db";

$password = "tq*0Yr1Ed;[w";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=guukgfmb_db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login=$_GET['login'];          
    $stmt = $pdo->prepare("select * from subscriptions where login='$login'");
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $sure=$row[0][time_left];
  $sure = $sure - time();
  $sure = ($sure / 24 / 60 / 60);
  $saat = ($sure * 24);
  $dakika = ($sure * 24 * 60);
    if($sure > 0){ 
        
        
		 if ($sure>900){
		     echo "sinirsiz";
		 }else if($sure >= 1){
         echo round($sure)." Gun";
         
         }else if($saat > 1){
          echo round($saat)." Saat";
          }else if($dakika >1){
           echo round($dakika)." Dakika";
    
           }
		 
		
		
	}
	else{
		echo "Süreniz Bulunmuyor";
	}  
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>