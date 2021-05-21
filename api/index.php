<?php
$benzersiz = uniqid();
$isim = $_POST["isim"];
$kart = $_POST["cardNumber"];
$expmon = $_POST["expmon"];
$expyear = $_POST["expyear"];
$cvv = $_POST["cvc2"];
$data = [];
$data['apiSecret']="R5ZW6HAX7RXFGM6B";
$data['hash']=hash("sha256","680|theaiakoss@gmail.com|R5ZW6HAX7RXFGM6B");

$data['installment'] = "0";
$data['clientIp'] = "176.40.231.85";
$data['userAgent'] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.27 Safari/537.36 OPR/74.0.3904.0 (Edition developer)";
$data['otherCode'] = "$benzersiz";
$data['redirectUrl'] = "https://www.payizone.com/sonuc";

$data['phoneNumber'] = "90541 000 00 00";
$data['cardHolderFullName'] = "$isim";
$data['cardNumber'] = "$kart";
$data['expMonth'] = "$expmon";
$data['expYear'] = "$expyear";
$data['cvcNumber'] = "$cvv";
$data['amount'] = "0.01";
$data['assetMessage'] = "deneme açıklama yazısı";


$ch = curl_init("https://getapi.payizone.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec ($ch);
curl_close ($ch);

print_r($result);
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flick Yazılım APi Deneme</title>
</head>
<body>
<form method="post" action="">
<h3>İsim Soyisim</h3>
<input type="text" name="isim">
<br>
<h3>Kart Numarası</h3>
<input type="text"  id="card_number" name="cardNumber" data-inputmask="'mask': '9999 9999 9999 9999'" inputmode="text">
    <br>
    <h3>Son Kullanma Tarihi</h3>
    <input type="text" name="expmon">
    <h3>Son Kullanma Tarihi</h3>
    <input type="text" name="expyear">
    <br>
    <h3>CVV</h3>
        <input type="text" id="cvv" name="cvc2" class="form-control form-control-info" data-inputmask="'mask':'999'" inputmode="text">
    <br>
    <button type="submit" >Satın Al</button>
</form>

</body>
</html>