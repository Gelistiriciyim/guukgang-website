<?php
include'../core/core.php' ;
if (isset($_SESSION["login"])) {
$login  = $_SESSION["login"];
$kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
$sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();

if ($kbilgi["status"]>0) {
?>
<html lang="tr">

<head>
    <link href="../main/templates/css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="../main/templates/css/stylees.css">
    <link rel="stylesheet" href="../main/templates/css/bootstrap.css">
    <link rel="stylesheet" href="../main/templates/css/toastr.min.css">
    <link data-n-head="true" rel="icon" type="image/x-icon" href="../main/templates/img/icon.ico">
    <script src="../c2ee9cd28b.js" crossorigin="anonymous"></script>
    <script charset="UTF-8" src="../js/push/98c44feb5a84d8e05a7133304cc9c5f7_1.js" async=""></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>


    <noscript><div><img src="../watch/62706754/1.gif" style="position:absolute; left:-9999px;" alt=""></div></noscript>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:image" content="/main/templates/img/preview.webp">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="csgo hile satın alma, cs go hile satın al mobil ödeme, cs go hile satın al 2020, csgo hileleri satın al, csgo hile kodu, csgo hile bedava, csgo hile satın al, csgo hile bedava 2020, csgo hilesi, csgo hile komutları, csgo hile 2020, csgo hile nasıl açılır, 	csgo hile indir, csgo hile açma, csgo hile al, 	csgo hile aim, 	cs go hile al, csgo hile açtım, csgo hile ayarları, csgo hile, cs go hile, cs go hile satın al, cs go hile al, csgo ucuz hile, csgo hile al, csgo guukgang, guukgang, guukgang yazılım, guukgang yazılım 3 senedir kimseye vac ban yedirmiyor, cs go guukgang">

    <link data-n-head="true" rel="icon" type="image/x-icon" href="../main/templates/img/icon.ico">
    <meta data-n-head="true" data-hid="og-image" name="og:image" content="/main/templates/img/preview.png">
    <title>GuukGang | Profil</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:image" content="/main/templates/img/preview.webp">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="%100 VAC Korumalı CS:GO Hile sağlayıcısı, hileni hemen satın al oyunun tadını çıkar!">

    <meta name="keywords" content="csgo hile satın alma, cs go hile satın al mobil ödeme, cs go hile satın al 2020, csgo hileleri satın al, csgo hile kodu, csgo hile bedava, csgo hile satın al, csgo hile bedava 2020, csgo hilesi, csgo hile komutları, csgo hile 2020, csgo hile nasıl açılır, 	csgo hile indir, csgo hile açma, csgo hile al, 	csgo hile aim, 	cs go hile al, csgo hile açtım, csgo hile ayarları, csgo hile, cs go hile, cs go hile satın al, cs go hile al, csgo ucuz hile, csgo hile al, csgo guukgang, guukgang, guukgang yazılım, guukgang yazılım 3 senedir kimseye vac ban yedirmiyor, cs go guukgang">
    <link data-n-head="true" rel="icon" type="image/x-icon" href="../main/templates/img/icon.ico">
    <meta data-n-head="true" data-hid="og-image" name="og:image" content="/main/templates/img/preview.png">
</head>

<body id="profile">
<?php include '../page/header.php'; ?>
<?php include 'header.php'; ?>
                    <div class="col col-12 col-md-9">
                        <div class="row pluss-row">
                            <div class="col col-12 col-md-6">
                                <div class="change-block">
                                <script>function sifre(){var girisb=$("#sifresifirla").serialize();$.ajax({type : "POST",data : girisb,url : "core/sifre_sifirla.php",success : function(girisyap){if ($.trim(girisyap) == "bos"){toastr.info('Lütfen boşlukları doldurun', 'Boş Alan Var');}else if ($.trim(girisyap) == "yanlis"){toastr.error('Eşki şifreniz yanlış lütfen kontrol edin', 'Şifre Yanlış');}else if ($.trim(girisyap) == "kucuk"){toastr.error('Şifreniz 6 karakterden kısa', 'Şifreniz Kısa');}else if ($.trim(girisyap) == "basarili"){toastr.success('Şifreniz başarılı şekilde değiştirildi', 'Başarılı'); setTimeout(function(){window.location="../profil";},3000);}} });}</script>

                                    <div class="label">Şifre Değiştir</div>
                                    <form id="sifresifirla" action="" method="POST"  onsubmit="return false;">
                                    <div class="label_input">Eski şifreniz:</div>
                                    <input type="password" name="oldpass"  >
                                    <div class="label_input">Yeni Şifreniz:</div>
                                    <input type="password" name="newpass" >
                                    <input type="hidden" name="sifirla">
                                    <button onclick="sifre()" type="submit">Onayla</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="change-block">
                                    <div class="label">E-Mail Adresini Değiştir</div>
                                    <form class="change-email" method="POST">
                                    <div class="label_input">Yeni E-Mail Adresi:</div>
                                    <input type="email" class="email">
                                    <div class="label_input">Şifreniz:</div>
                                    <input type="password" class="password">
                                    <button type="submit">Onayla</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row pluss-row">
                            <div class="profile-right-history">
                                                                    <div class="footer-label">Giriş Kayıtları</div><br>
                                    <table class="table">
                                        <thead class="thead">
                                            <tr>
                                                <th>Giriş Tarihi</th>
                                                <th>Tarayıcı</th>
                                                <th>İşletim Sistemi</th>
                                                <th>Şehir</th>
                                                <th>Ülke</th>
                                                <th>IP</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                                                                        <tr>
                                                <td>26.12.2020 11:20</td>
                                                <td>Chrome</td>
                                                <td>Windows 10</td>
                                                <td>Antalya</td>
                                                <td>Turkey</td>
                                                <td>176.232.181.192</td>
                                            </tr>
                                                                                        <tr>
                                                <td>26.12.2020 11:19</td>
                                                <td>Chrome</td>
                                                <td>Windows 10</td>
                                                <td>Antalya</td>
                                                <td>Turkey</td>
                                                <td>176.232.181.192</td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
	<script src="/main/templates/js/jquery-3.2.1.min.js" async="" defer=""></script>
<script src="/main/templates/js/jQuery.js" type="text/javascript"></script>
<script src="/main/templates/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="/main/templates/js/modal.js"></script>
<script src="/main/templates/js/main.js"></script>
<script src="/main/templates/js/toastr.min.js"></script>
</body>

</html>
<?php }  else if($kbilgi["status"]==0){ header("Location:ban/index.html"); } } elseif(!isset($_SESSION["login"])){header("Location:giris.php");} ?>
