<?php
include'core/core.php' ;

if (isset($_SESSION["login"])) {
$login  = $_SESSION["login"];
$kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
$sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();
}
?>
<html lang="tr">

<head>
    <link href="main/templates/css/font.css" rel="stylesheet">
<link rel="stylesheet" href="main/templates/css/stylees.css">
<link rel="stylesheet" href="main/templates/css/bootstrap.css">
<link rel="stylesheet" href="main/templates/css/toastr.min.css">
<link data-n-head="true" rel="icon" type="image/x-icon" href="main/templates/img/icon.ico">
<script src="c2ee9cd28b.js" crossorigin="anonymous"></script>
<script charset="UTF-8" src="js/push/98c44feb5a84d8e05a7133304cc9c5f7_1.js" async=""></script>
<noscript><div><img src="watch/62706754/1.gif" style="position:absolute; left:-9999px;" alt=""></div></noscript>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="og:image" content="/main/templates/img/preview.webp">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="csgo hile satın alma, cs go hile satın al mobil ödeme, cs go hile satın al 2020, csgo hileleri satın al, csgo hile kodu, csgo hile bedava, csgo hile satın al, csgo hile bedava 2020, csgo hilesi, csgo hile komutları, csgo hile 2020, csgo hile nasıl açılır, 	csgo hile indir, csgo hile açma, csgo hile al, 	csgo hile aim, 	cs go hile al, csgo hile açtım, csgo hile ayarları, csgo hile, cs go hile, cs go hile satın al, cs go hile al, csgo ucuz hile, csgo hile al, csgo guukgang, guukgang, guukgang yazılım, guukgang yazılım 3 senedir kimseye vac ban yedirmiyor, cs go guukgang">

<link data-n-head="true" rel="icon" type="image/x-icon" href="main/templates/img/icon.ico">
<meta data-n-head="true" data-hid="og-image" name="og:image" content="/main/templates/img/preview.png">
<script src="recaptcha/api.js?hl=ru" async="" defer=""></script>    
<title>GuukGang | AnaSayfa</title>

</head>

<body id="index">
<?php include 'page/header.php'; ?>
<div class="alerts"></div>    <main>


</div>

        <a id="buy"></a><br><br><br><br><br><br>
        <section id="buy-access">
            <div class="container">
                <div class="container_title">
                <center>
                    <div class="container_text_bot" style="text-align: center;">Sans Kutusu</div></center>
                </div>
            </div>
                
                        <div class="container">
                <div class="buy-access-flex">
                    <div class="buy-card">
                        <center> <h3 class="headsans">Demir Kasa</h3> </center>
                        <br>
                        <img style="width: 220px;" src="https://guukgang.com/rsm/gumus.png" alt="csgo hile gümüş şans kutusu" title="GuukGang- Demir Şans Kutusu">
                        <div class="content">
                            <ul>
                            <li>Kutuda Boş Yok</li>
                            <li>Sınırsız Kazanma Şansı</li>
                            <li>%30 Yüksek Çıkma İhtimali</li>
                            <?php
                            $kasa = $kbilgi["kasa"];
                            if($kasa>0){ ?>
                            <li><?php echo $kasa?> Adet Kasanız Var</li>
                            <?php }else{ ?>
                            <li>Hiç Kasanız Bulunmuyor</li>
                            <?php } ?>
                            </ul>
                        </div>
                                                <span class="discount">10 TL</span>
                                                                        
                                                <?php
$kasa = $kbilgi["kasa"];
if($kasa>0){
echo '<form action="sans.php" method="post">';
echo '<button class="buy-btn" name="kasa" type="submit">Kasa Aç</button>';
echo "</form>";
?>

<?php
}elseif($kasa=0){
	?>
    <button class="modal_btn1 buy-btn">Satın Al</button>
	<?php 
}elseif($kasa<0){
	?>
	<button class="modal_btn1 buy-btn">Satın Al</button>
	<?php
}else{
    ?>
	<button class="modal_btn1 buy-btn">Satın Al</button>
	
	<?php
}
?>
                                            </div>
                    
                                            <div class="buy-card">
                        <center> <h3 class="headsans">Altın Kasa</h3> </center>
                        <br>
                        <img style="width: 220px;" src="https://guukgang.com/rsm/altin.png" alt="csgo hile gümüş şans kutusu" title="GuukGang- Demir Şans Kutusu">
                        <div class="content">
                            <ul>
                            <li>Kutuda Boş Yok</li>
                            <li>Sınırsız Kazanma Şansı</li>
                            <li>%60 Yüksek Çıkma İhtimali</li>
                            <?php
                            $kasa2 = $kbilgi["kasa2"];
                            if($kasa2>0){ ?>
                            <li><?php echo $kasa2?> Adet Kasanız Var</li>
                            <?php }else{ ?>
                            <li>Hiç Kasanız Bulunmuyor</li>
                            <?php } ?>
                            </ul>
                        </div>
                                                <span class="discount">20 TL</span>
                                                <?php
$kasa2 = $kbilgi["kasa2"];
if($kasa2>0){
echo '<form action="sans.php" method="post">';
echo '<button class="buy-btn" name="kasa2" type="submit">Kasa Aç</button>';
echo "</form>";
?>

<?php
}elseif($kasa2=0){
	?>
    <button class="modal_btn2 buy-btn">Satın Al</button>
	<?php 
}elseif($kasa2<0){
	?>
	<button class="modal_btn2 buy-btn">Satın Al</button>
	<?php
}else{
    ?>
	<button class="modal_btn2 buy-btn">Satın Al</button>
	
	<?php
}
?>
                        
                                            </div>
                                            <div class="buy-card">
                        <center> <h3 class="headsans">Elmas Kasa</h3> </center>
                        <br>
                        <img style="width: 220px;" src="https://guukgang.com/rsm/elmas.png" alt="csgo hile gümüş şans kutusu" title="GuukGang- Demir Şans Kutusu">
                        <div class="content">
                            <ul>
                            <li>Kutuda Boş Yok</li>
                            <li>Sınırsız Kazanma Şansı</li>
                            <li>%90 Yüksek Çıkma İhtimali</li>
                            <?php
                            $kasa3 = $kbilgi["kasa3"];
                            if($kasa3>0){ ?>
                            <li><?php echo $kasa3?> Adet Kasanız Var</li>
                            <?php }else{ ?>
                            <li>Hiç Kasanız Bulunmuyor</li>
                            <?php } ?>
                            </ul>
                        </div>
                                                <span class="discount">30 TL</span>
                                                <?php
$kasa3 = $kbilgi["kasa3"];
if($kasa3>0){
echo '<form action="sans.php" method="post">';
echo '<button class="buy-btn" name="kasa3" type="submit">Kasa Aç</button>';
echo "</form>";
?>
    
  
<?php
}elseif($kasa3=0){
	?>
    <button class="modal_btn3 buy-btn">Satın Al</button>
	<?php 
}elseif($kasa3<0){
	?>
	<button class="modal_btn3 buy-btn">Satın Al</button>
	<?php
}else{
    ?>
	<button class="modal_btn3 buy-btn">Satın Al</button>
	
	<?php
}
?>
                                          </div>
                </div>
            </div>
                    </section>
    <div class="container" id="footer">
    <div class="row pluss-row">
       <div class="col col-12 col-md-4">
           <div class="footer_block">
               <div class="footer_block_1_text_1">GuukGang  Yazılım © 2021</div>
               <div class="footer_block_1_text_2">Tüm hakları saklıdır</div>
           </div>
        </div>
       <div class="col col-12 col-md-4">
           <div class="footer_block">
               <div class="footer_block_1_text_1">Diğer:</div>
               <div class="footer_block_1_text_2"><a href="main/agreement.pdf" target="_blank">Kullanıcı sözleşmesi</a></div>
           </div>
        </div>
       <div class="col col-12 col-md-4">
           <div class="footer_block">
               <div class="footer_block_1_text_1">Sosyal medayada biz:</div>
               <div class="footer_block_social">
                   <a href="https://discord.gg/dw6EDZYDea" target="_blank"><i class="fab fa-discord"></i></a>
                   <a href="channel/UCF4X7ZyU3J06ZfqbKcsdlcg.html" target="_blank"><i class="fab fa-youtube"></i></a>
                   <a href="https://discord.gg/dw6EDZYDea" target="_blank"><i class="fab fa-instagram"></i></a>
               </div>
           </div>
        </div>
    </div>
    </main>
    <script>function kasaal1(){var girisb=$("#kasa_al1").serialize();$.ajax({type : "POST",data : girisb,url : "core/satinal.php",success : function(girisyap){if ($.trim(girisyap) == "giris"){toastr.info('Lütfen giriş yapınız', 'Giriş Yapılmamış');}else if ($.trim(girisyap) == "bakiye"){toastr.error('Lütfen bakiye yükleyin', 'Bakiye Yetersiz');}else if ($.trim(girisyap) == "basarili"){toastr.success('Hesabınıza demir kasa eklendi', 'Başarılı'); setTimeout(function(){window.location="sanskutusu.php";},3000);}} });}</script>
    <script>function kasaal2(){var girisb=$("#kasa_al2").serialize();$.ajax({type : "POST",data : girisb,url : "core/satinal.php",success : function(girisyap){if ($.trim(girisyap) == "giris"){toastr.info('Lütfen giriş yapınız', 'Giriş Yapılmamış');}else if ($.trim(girisyap) == "bakiye"){toastr.error('Lütfen bakiye yükleyin', 'Bakiye Yetersiz');}else if ($.trim(girisyap) == "basarili"){toastr.success('Hesabınıza altın kasa eklendi', 'Başarılı'); setTimeout(function(){window.location="sanskutusu.php";},3000);}} });}</script>
    <script>function kasaal3(){var girisb=$("#kasa_al3").serialize();$.ajax({type : "POST",data : girisb,url : "core/satinal.php",success : function(girisyap){if ($.trim(girisyap) == "giris"){toastr.info('Lütfen giriş yapınız', 'Giriş Yapılmamış');}else if ($.trim(girisyap) == "bakiye"){toastr.error('Lütfen bakiye yükleyin', 'Bakiye Yetersiz');}else if ($.trim(girisyap) == "basarili"){toastr.success('Hesabınıza elmas kasa eklendi', 'Başarılı'); setTimeout(function(){window.location="sanskutusu.php";},3000);}} });}</script>

    <div class="modal_wrap_def modal_1">
    <div class="modal_def">
        <div class="block_def"><i class="fas fa-times close_def close_1"></i>
            <div class="title">Satın Al</div>
            <div class="input_wrap">
                <div class="label">Bu ürünü gerçekten satın almak istiyormusunuz</div>
            </div>
        </div>
        <form id="kasa_al1" action="" method="POST"  onsubmit="return false;">
        <div class="button_wrap">
            <button style="margin: 0px 5px 0px 0px;" class="close_1">İptal</button>
            <input type="hidden" name = "kasa">
            <button onclick="kasaal1()" type="submit" style="margin: 0px 0px 0px 5px;" id="freezon">Satın Al</button>
            
        </div>
</form>
    </div>
</div>
<div class="modal_wrap_def modal_2">
    <div class="modal_def">
        <div class="block_def"><i class="fas fa-times close_def close_2"></i>
            <div class="title">Satın Al</div>
            <div class="input_wrap">
                <div class="label">Bu ürünü gerçekten satın almak istiyormusunuz</div>
            </div>
        </div>
        <form id="kasa_al2" action="" method="POST"  onsubmit="return false;">
        <div class="button_wrap">
            <button style="margin: 0px 5px 0px 0px;" class="close_2">İptal</button>
            <input type="hidden" name = "kasa2">
            <button onclick="kasaal2()" type="submit" style="margin: 0px 0px 0px 5px;" id="freezon">Satın Al</button>
            
        </div>
</form>
    </div>
</div>
<div class="modal_wrap_def modal_3">
    <div class="modal_def">
        <div class="block_def"><i class="fas fa-times close_def close_3"></i>
            <div class="title">Satın Al</div>
            <div class="input_wrap">
                <div class="label">Bu ürünü gerçekten satın almak istiyormusunuz</div>
            </div>
        </div>
        <form id="kasa_al3" action="" method="POST"  onsubmit="return false;">
        <div class="button_wrap">
            <button style="margin: 0px 5px 0px 0px;" class="close_3">İptal</button>
            <input type="hidden" name = "kasa3">
            <button onclick="kasaal3()" type="submit" style="margin: 0px 0px 0px 5px;" id="freezon">Satın Al</button>
            
        </div>
</form>
    </div>
</div>
</div>  <script src="main/templates/js/jquery-3.2.1.min.js" async="" defer=""></script>
<script src="main/templates/js/jQuery.js" type="text/javascript"></script>
<script src="main/templates/js/bootstrap.min.js" type="text/javascript"></script>
<script src="ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="main/templates/js/modal.js"></script>
<script src="main/templates/js/main.js"></script>
<script src="main/templates/js/toastr.min.js"></script>
<script src="https://kit.fontawesome.com/5dbd43e51e.js" crossorigin="anonymous"></script>
</body>
</html>