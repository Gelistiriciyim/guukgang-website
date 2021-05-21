<?php

$servername = "localhost";

$username = "guukgfmb_db";

$password = "tq*0Yr1Ed;[w";

$hwid = $_GET['hwid'];

try {
    $pdo = new PDO("mysql:host=$servername;dbname=guukgfmb_db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
    $stmt = $pdo->prepare("select * from userdatabase where hwid='$hwid'");
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $user_id_hwid=$row[0][id];
    if($user_id_hwid > 0){           
        echo $row[0][login];
    }
    else{                    
        echo 0;
    }         
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>