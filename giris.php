<html lang="tr">

<head>
    <link href="main/templates/css/font.css" rel="stylesheet">
<link rel="stylesheet" href="main/templates/css/stylees.css">
<link rel="stylesheet" href="main/templates/css/bootstrap.css">
<link rel="stylesheet" href="main/templates/css/toastr.min.css">
<link data-n-head="true" rel="icon" type="image/x-icon" href="main/templates/img/icon.ico">
<script src="c2ee9cd28b.js" crossorigin="anonymous"></script>
<script charset="UTF-8" src="js/push/98c44feb5a84d8e05a7133304cc9c5f7_1.js" async=""></script>


<noscript><div><img src="../watch/62706754/1.gif" style="position:absolute; left:-9999px;" alt=""></div></noscript>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="og:image" content="/main/templates/img/preview.webp">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="%100 VAC Korumalı CS:GO Hile sağlayıcısı, hileni hemen satın al oyunun tadını çıkar!">
<link data-n-head="true" rel="icon" type="image/x-icon" href="main/templates/img/icon.ico">
<meta data-n-head="true" data-hid="og-image" name="og:image" content="/main/templates/img/preview.png">
    <title>GuukGang | Giriş Yap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:image" content="/main/templates/img/preview.webp">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="%100 VAC Korumalı CS:GO Hile sağlayıcısı, hileni hemen satın al oyunun tadını çıkar!">

    <meta name="keywords" content="csgo hile satın alma, cs go hile satın al mobil ödeme, cs go hile satın al 2020, csgo hileleri satın al, csgo hile kodu, csgo hile bedava, csgo hile satın al, csgo hile bedava 2020, csgo hilesi, csgo hile komutları, csgo hile 2020, csgo hile nasıl açılır, 	csgo hile indir, csgo hile açma, csgo hile al, 	csgo hile aim, 	cs go hile al, csgo hile açtım, csgo hile ayarları, csgo hile, cs go hile, cs go hile satın al, cs go hile al, csgo ucuz hile, csgo hile al, csgo guukgang, guukgang, guukgang yazılım, guukgang yazılım 3 senedir kimseye vac ban yedirmiyor, cs go guukgang">

    <link data-n-head="true" rel="icon" type="image/x-icon" href="main/templates/img/icon.ico">
    <meta data-n-head="true" data-hid="og-image" name="og:image" content="/main/templates/img/preview.png">
</head>

<body>
	<div class="header">
<?php include 'page/header.php'; ?>
<div class="alerts"></div>    <main>
        <section id="auth-access">
            <div class="container">
                <div class="row pluss-row">
                    <div class="col col-12 col-md-7"></div>
                    <div class="col col-12 col-md-5">
                       <div id="right_block_auth">
                            <div class="container">
                                <div class="container_title">
                                    <div class="container_text_bot">Giriş Yap</div>
                                </div>
                                <div class="auth-access-flex">
                                    <div class="auth-card">
                                        <script>function guuk(){var girisb=$("#girisforum").serialize();$.ajax({type : "POST",data : girisb,url : "../core/islem.php",success : function(girisyap){if ($.trim(girisyap) == "no"){toastr.error('Lütfen kullanıcı adı veya şifrenizi doğru giriniz', 'Bilgiler yanlış'); grecaptcha.reset();}else if ($.trim(girisyap) == "dogrulama"){toastr.info('Lütfen robot doğrulamasını yapınız. (Sorun çıkarsa sayfayı yenileyin)', 'Doğrulama'); grecaptcha.reset();}else if ($.trim(girisyap) == "basarili"){toastr.success('Kasadan $sans Gün Süre Kazandın', 'Giriş başarılı'); setTimeout(function(){window.location="../profil";},3000);grecaptcha.reset();}} });}</script>
                                        <form id="girisforum" action="" method="POST"  onsubmit="return false;">
                                        <div class="auth-form">
                                            <label>Kullanıcı Adı:</label>
                                            <input name="login" type="text" class="login">
                                        </div>
                                        <div class="auth-form">
                                            <label>Şifreniz:</label>
                                            <input name="password" type="password" class="password">
                                            <input type="hidden" name="gonder">
                                        </div>
                                        <div data-theme="dark" class="g-recaptcha" data-sitekey="6LdgfhsaAAAAAN72UxZqr3IS-u1oadmvL6JJLj2d"></div>
                                        <button type="submit" onclick="guuk()" name="gonder">Giriş Yap</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'foother.php'; ?>
        </main>
</div>
    <script src="main/templates/js/jquery-3.2.1.min.js" async="" defer=""></script>
    <script src="main/templates/js/jQuery.js" type="text/javascript"></script>
    <script src="main/templates/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="main/templates/js/modal.js"></script>
    <script src="main/templates/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
    <script src="main/templates/js/toastr.min.js"></script>
</body>

</html>
