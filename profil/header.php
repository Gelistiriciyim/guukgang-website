<?php
include'../core/core.php' ;
if (isset($_SESSION["login"])) {
$login  = $_SESSION["login"];
$kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
$sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();
}
?>
<div class="alerts"></div>    <main>
    <section id="profile-access">
        <div class="container">
            <div class="row pluss-row profile-access-flex">
                <div class="col col-12 col-md-3">
                    <div class="profile-left-block">
                        <ul>
                            <li>
                                <a href="/profil"><div class="text">Profil</div></a>
                            </li>
                            <li>
                                <a href="/#buy-access" target="_blank"><div class="text">Satın Al</div></a>
                            </li>
                            <li>
                                <a href="/profil/ayarlar.php"><div class="text">Hesap Ayarları</div></a>
                            </li>
                            
                            <li>
                                <a href="/profil/"><div class="text">Yazılımı İndir</div></a>
                            </li>
                            <?php if($kbilgi["status"] == 3){ ?>
                                <li>
                                <a href="ozel.php"><div class="text">Yönetici Paneli</div></a>
                            </li>
                            <?php }else{} ?>
                            <li>
                                <a href="/logout"><div class="icon"><i class="fas fa-sign-out-alt"></i></div><div class="text">Çıkış Yap</div></a>
                            </li>
                        </ul>
                    </div>
                </div>