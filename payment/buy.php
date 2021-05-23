<?php

include'../core/core.php';




if (isset($_GET["urun_id"])) {
  if (isset($_SESSION["login"])) {
    $login = $_SESSION['login'];
    $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
    $bakiye = $_POST["bakiye"];


      // Ürün fiyatları
      $urunler = array(
        "urun_1" => $bakiye
        
      );

      require_once "shopier.php";

    $shopier = new Shopier('Shopier key', 'Shopier secret key');

    
      // ÖDEME YAPAN KİŞİNİN BİLGİLERİ
      $shopier->setBuyer([
        'id'          => $kbilgi["id"],
        'first_name'  => $kbilgi["login"],
        'last_name'   => $kbilgi["login"],
        'email'       => $kbilgi["email"],
        'phone'       => '+90 535 000 00 00'

      ]);
      // VERİLEN SİPARİŞİN FATURASI
      $shopier->setOrderBilling([
        'billing_address'   => 'Esentepe Mahallesi Eski Büyükdere Caddesi, Tekfen Tower No:209, 34343 4.Levent/Şişli',
        'billing_city'      => 'İstanbul',
        'billing_country'   => 'Türkiye',
        'billing_postcode'  => '34000'
      ]);
      // SİPARİŞİ VEREN KİŞİ - ÜSTTEKİ İLE AYNI BİLGİLERİ GİREBİLİRSİNİZ.
      $shopier->setOrderShipping([
        'shipping_address'  => 'Esentepe Mahallesi Eski Büyükdere Caddesi, Tekfen Tower No:209, 34343 4.Levent/Şişli',
        'shipping_city'     => 'İstanbul',
        'shipping_country'  => 'Türkiye',
        'shipping_postcode' => '34000'
      ]);
      $extraData = $kbilgi["login"].'|'.$_GET["urun_id"].'|'.$bakiye;
      die($shopier->run($extraData, $urunler[$_GET["urun_id"]], 'https://guukgang.com/payment/callback.php'));

  }
  else {
    echo "giriş yap amq";
  }
}
else {
 echo "hata";
}

?>
