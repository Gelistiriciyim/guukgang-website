<?php

include'core.php';
if (isset($_SESSION["login"])) {
    $login  = $_SESSION["login"];
    $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
    $sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();
}
$urun_1 = $_POST["urun_1"];
$urun_2 = $_POST["urun_2"];
$urun_3 = $_POST["urun_3"];
$urun_4 = $_POST["urun_4"];
$urun_5 = $_POST["urun_5"];
$urun_6 = $_POST["urun_6"];
$urun_7 = $_POST["urun_7"];
$urun_8 = $_POST["urun_8"];
$kasa_1 = $_POST["kasa"];
$kasa_2 = $_POST["kasa2"];
$kasa_3 = $_POST["kasa3"];
$bakiye = $kbilgi["bakiye"];
$bugun = time();
$kasa1 = $kbilgi["kasa"];
$kasa2 = $kbilgi["kasa2"];
$kasa3 = $kbilgi["kasa3"];
if (isset($urun_1)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=10) {
        
            $guncel_bakiye = $bakiye - 10;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (7 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (7 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}


if (isset($urun_2)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=15) {
        
            $guncel_bakiye = $bakiye - 15;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (15 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (15 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}


if (isset($urun_3)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=30) {
        
            $guncel_bakiye = $bakiye - 30;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (30 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (30 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}



if (isset($urun_4)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=50) {
        
            $guncel_bakiye = $bakiye - 50;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (60 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (60 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}



if (isset($urun_5)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=70) {
        
            $guncel_bakiye = $bakiye - 70;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (90 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (90 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}



if (isset($urun_6)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=150) {
        
            $guncel_bakiye = $bakiye - 150;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (365 * 24 * 60 * 60); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (365 * 24 * 60 * 60); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}

if (isset($urun_7)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=230) {
        
            $guncel_bakiye = $bakiye - 230;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (60 * 60 * 24 * 1001); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                $toplam = time() + (60 * 60 * 24 * 1001); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}


if (isset($urun_8)) {
    if (isset($_SESSION["login"])){
        
        if ($bakiye>=100) {
        
            $guncel_bakiye = $bakiye - 100;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            if($sbilgi["time_left"] > $bugun){ 
                $toplam2 = $sbilgi["time_left"] + (60 * 60 * 24 * 100); 
                $top = "UPDATE subscriptions SET time_left = '$toplam2' where login='$login'"; 
                if ($vt->query($top)===true) {
                }
                echo "basarili";
           exit(); 
                }else{ 
                    
                $toplam = time() + (60 * 60 * 24 * 100); 
                $sql_t = "INSERT into subscriptions ( `time_left`, `login`, `status`, `usergroup`) values ( '$toplam', '$login', '1', '0')" ; 
                if ($vt->query($sql_t)===true) {
                }
                echo "basarili";
            }
exit(); 
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }

    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }
}

if(isset($kasa_1)){
    if (isset($_SESSION["login"])){
        if ($bakiye>=10) {
            $guncel_bakiye = $bakiye - 10;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            $guncel_kasa = $kasa1 + 1;
            $guncel_kasa = "UPDATE userdatabase SET kasa = '$guncel_kasa' where login='$login'";
            if ($vt->query($guncel_kasa)===true) {  
            }
            echo "basarili";
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }
        
    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }

}
if(isset($kasa_2)){
    if (isset($_SESSION["login"])){
        if ($bakiye>=20) {
            $guncel_bakiye = $bakiye - 20;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            $guncel_kasa = $kasa2 + 1;
            $guncel_kasa = "UPDATE userdatabase SET kasa2 = '$guncel_kasa' where login='$login'";
            if ($vt->query($guncel_kasa)===true) {  
            }
            echo "basarili";
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }
        
    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }

}
if(isset($kasa_3)){
    if (isset($_SESSION["login"])){
        if ($bakiye>=30) {
            $guncel_bakiye = $bakiye - 30;
            $guncel_bakiye = "UPDATE userdatabase SET bakiye = '$guncel_bakiye' where login='$login'";
            if ($vt->query($guncel_bakiye)===true) {  
            }
            $guncel_kasa = $kasa3 + 1;
            $guncel_kasa = "UPDATE userdatabase SET kasa3 = '$guncel_kasa' where login='$login'";
            if ($vt->query($guncel_kasa)===true) {  
            }
            echo "basarili";
        }else{
            echo "bakiye"; //bakiye yoksa 
            exit;
        }
        
    }else{
        echo "giris"; // giriş yapılmadıysa bunu yazacak
        exit;
    }

}

?>