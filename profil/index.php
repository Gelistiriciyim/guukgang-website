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
        <div class="col col-12 col-md-5">
            <div class="info">
                <ul>
                    <li>
                        <div class="title">Kullanıcı Adı:</div>
                        <div class="text"><?= $login; ?></div>
                    </li>
                    <li>
                        <div class="title">Email:</div>
                        <div class="text"><?= $kbilgi["email"]; ?></div>
                    </li>
                    <li>
                        <div class="title">Kayıt Tarihi:</div>
                        <div class="text"><?= $kbilgi["kayit"]; ?></div>
                    </li>
                    <li>
                        
                        <div class="title">Yetki: </div>
                        

                    
                        <div class="text"> <?php  if($kbilgi["status"] == 1){ echo "Kullanıcı"; }elseif($kbilgi["status"] == 2 ){ echo "Sponsor";}elseif($kbilgi["status"] == 3){echo "Yönetici";} ?> </div>
                    </li>
                    <li>
                        <div class="title">Bakiye:</div>
                        <div class="text"><?= $kbilgi["bakiye"]." TL"; ?></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-12 col-md-3">
            <div class="subscription_text">Kalan Zaman</div>
            <div class="row pluss-row">
            <div class="col col-3 col-md-4  ">
                    <div class="subscription_days"><div id="gun"></div></div>
                    <div class="subscription_text_days">Gün</div>
                </div>
                
                <div class="col col-3 col-md-4">
                    <div class="subscription_days"><div id="saat"></div></div>
                    <div class="subscription_text_days">Saat</div>
                </div>
                <div class="col col-3 col-md-4">
                    <div class="subscription_days"><div id="dakika"></div></div>
                    <div class="subscription_text_days">Dakika</div>
                </div>


            </div>
        </div>
        <div class="col col-12 col-md-3">
            <div class="button">
                <button class="modal_btn1">Hwid Sıfırla</button>
                <button class="modal_btn2">Aktivasyon Kodu</button>
            </div>
        </div>
    </div>
    <br><br>
    <center>
    <div class="col col-lg-12 col-md-6">
                                <div class="change-block">
                                    <div class="label">Bakiye Yükle</div>
                                    <form method="POST" action="../payment/buy.php?urun_id=urun_1">
                                    <div class="label_input">Yüklenecek Bakiye: </div>
                                    <input type="number" name="bakiye" class="text" min="1" max="99999">
                                    
                                    <button type="submit">Onayla</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </center>

</div>
</div>
</div>

</section>





</main>

<script>function hwidsifirla(){var girisb=$("#hwid_sifirla").serialize();$.ajax({type : "POST",data : girisb,url : "core/hwid_sifirla.php",success : function(girisyap){if ($.trim(girisyap) == "bekle"){toastr.info('Hwidnizi sıfırlamak için lütfen bekleyin', 'Bekleyim');}else if ($.trim(girisyap) == "basarili"){toastr.success('Hwidniz başarılı bir şekilde sıfırlandı', 'Hwid Sıfırlandı'); setTimeout(function(){window.location="../profil";},3000);}} });}</script>


<div class="modal_wrap_def modal_1">
    <div class="modal_def">
        <div class="block_def"><i class="fas fa-times close_def close_1"></i>
            <div class="title">Hwid sıfırla</div>
            <div class="input_wrap">
                <div class="label">Hwidnizi 7 günde 1 sıfırlaya bilirsiniz!</div>
            </div>
        </div>
        <form id="hwid_sifirla" action="" method="POST"  onsubmit="return false;">
        <div class="button_wrap">
            <button style="margin: 0px 5px 0px 0px;" class="close_1">İptal</button>
            <input type="hidden" name = "reshwid">
            <button onclick="hwidsifirla()" type="submit" style="margin: 0px 0px 0px 5px;" id="freezon">Sıfırla</button>
            
        </div>
</form>
    </div>
    </div>

<div class="modal_wrap_def modal_2">
    <div class="modal_def">
       

    <form  action="../core/kod.php" method="POST" >
            <div class="block_def"><i class="fas fa-times close_def close_2"></i>
                <div class="title">Kod Etkinleştir</div>
                <div class="input_wrap">
                    <div class="label">Aktivasyon Kodunuz:</div>
                    <input type="text"  name="kod">
                    <input type="hidden" name="kodgonder">
                </div>
            </div>

            <div class="button_wrap"><input type="submit" value="Aktif Et"></div>
        </form>
    </div>
</div>

<script src="/main/templates/js/jquery-3.2.1.min.js" async="" defer=""></script>
<script src="/main/templates/js/jQuery.js" type="text/javascript"></script>
<script src="/main/templates/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="/main/templates/js/modal.js"></script>
<script src="/main/templates/js/main.js"></script>
<script src="/main/templates/js/guukgang.js"></script>
<script src="/main/templates/js/toastr.min.js"></script>

</body>

</html>
<?php }  else if($kbilgi["status"]==0){ header("Location:ban/index.html"); } } elseif(!isset($_SESSION["login"])){header("Location:../giris.php");} ?>
