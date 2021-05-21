<?php

$servername = "localhost";

$username = "guukgfmb_db";

$password = "tq*0Yr1Ed;[w";



try {

  $pdo = new PDO("mysql:host=$servername;dbname=guukgfmb_db", $username, $password);

  // set the PDO error mode to exception

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "Connected successfully";

  

//Kullanıc adi ve  şifre gelirse 

  $login=strip_tags($_GET['login']);

  $password=strip_tags($_GET['password']);

  $hwid=strip_tags($_GET['hwid']);



$stmt = $pdo->prepare("select * from userdatabase where login='$login' and password=md5('$password')");

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

         $user_id=$row[0][id];

         $hwid_=$row[0][hwid];

        if($user_id>0 && $hwid_){

            

            $stmt = $pdo->prepare("select * from userdatabase where login='$login' and password=md5('$password') and hwid='$hwid'");

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

         $user_id_hwid=$row[0][id];

         if($user_id_hwid>0){

                     
                     
    $sbilgi= $pdo->query("select * from subscriptions where login='$login'")->fetch();
    
    $sure = $sbilgi["time_left"];
  $sure = $sure - time();
  $sure = ($sure / 24 / 60 / 60);
  $saat = ($sure * 24);
  $dakika = ($sure * 24 * 60);
  
  if($dakika > 0){
      
      echo 1;
  }else{
      echo 4;
  }
                     

                 }else{

                     

                     echo 2;

                 }

         

            

        }elseif($user_id>0 && !$hwid_){

         

            

               $stmt = $pdo->prepare("UPDATE userdatabase set hwid='$hwid' where login='$login' and password=md5('$password')");



                $stmt->execute();

                echo 3;

    

        }else{

            echo 0;

        }

 



//print json_encode($row);

  

} catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

}







?>