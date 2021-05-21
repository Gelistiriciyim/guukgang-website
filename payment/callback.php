<?php
function go($url) {
  header("Location: $url");
  exit();
}
function post($parameter) {
  if (isset($_POST[$parameter])) {
    return htmlspecialchars(trim(strip_tags($_POST[$parameter])));
  }
  else {
    return false;
  }
}
function get($parameter) {
  if (isset($_GET[$parameter])) {
    return strip_tags(trim(addslashes($_GET[$parameter])));
  }
  else {
    return false;
  }
}

include'../core/core.php';



$basarili = '<strong style="color: #179400; display: block;">Ödeme başarılı! Lisansınız otomatik olarak aktif edilmiştir!</strong><a href="/profil">Profiline dönmek için tıkla!</a>';
$basarisiz = '<strong style="color: red; display: block;">Ödeme başarısız!</strong><a href="/">Ana sayfaya dönmek için tıkla!</a>';

$signature  = base64_decode(post("signature"));
$data       = post("random_nr").post("platform_order_id").post("total_order_value").post("currency");
$expected   = hash_hmac('SHA256', $data, "9a1a238fe4a45d933a7402a168af5db9", true);
if (strcmp($signature, $expected) == 0) {
  if (post("status") == 'success') { 
    $extraData = explode('|', post("platform_order_id"));
    $login  = $extraData[0];

    $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
    if ($login) {

     
          $urunler = array(
        "urun_1" => $extraData[2]
        
      );
      $bakiye =  $urunler[$extraData[1]];
     $bakiye_ekle = "UPDATE userdatabase SET bakiye = '$bakiye' where login='$login'";
      if ($vt->query($bakiye_ekle)===true) {
      }


      die($basarili);


    }
    else {
      echo "$login";
      die($basarisiz);

    }
  }
  else {
    echo"2";
    die($basarisiz);

  }
}
else {
  echo"1";
  die($basarisiz);

}

?>



     
   