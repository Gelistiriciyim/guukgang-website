<?php
 include'../../core/core.php' ;
 if (isset($_SESSION["login"])) {
 $login  = $_SESSION["login"];
 $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
 }
if (isset($_POST["koduret"])){
  if (empty($_POST["sure"]) ) {
echo "<script>alert('Lütfen süre giriniz')</script>";
header("Refresh: 0; url=../ozel.php");
  }else{
   if($kbilgi["status"]==3){
      $sure = $_POST["sure"];
      $kod = rand(0,9999);
      $kod = crc32(sha1(md5($kod)));
      $top = rand(999999990,999999999);
      $kod = $kod + $top;
      $kod = "GUUKGANG-".$kod;
      $sql = "INSERT INTO kod (kod, sure, durum) VALUES ('$kod', '$sure', '1')";
         if($vt->query($sql)===true){
  }
  $bugun = date('Y-m-d h:i:s');
  $log = "INSERT INTO `kod_log` (`id`, `durum`, `aciklama`, `tarih`) VALUES (NULL, 'Oluşturdu', '$login adlı yetkili $sure Günlük kod oluşturdu', '$bugun');" ;
        if ($vt->query($log)===true) {
        }
  header("Location:../ozel.php");
   }
}
}
?>
