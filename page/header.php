<?php
include'core/core.php' ;

if (isset($_SESSION["login"])) {

    $login  = $_SESSION["login"];

    $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();

}?>

	<div class="header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-md bg-transparent w-100">
                <a class="navbar-brand lt-110" href="../index.php">
                    <img src="https://media.discordapp.net/attachments/785955800417959967/789172743093354526/yilbasi.png" style="width: 100px">
                </a>

          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto font-medium w-100 lt-110" name="menu">
                        <li class="nav-item"><a id="scroll" class="nav-link" href="/index.php" data-scroll="#head">AnaSayfa</a></li>
                        <li class="nav-item"><a id="scroll" class="nav-link" href="/#buy-access" data-scroll="#instruct">Satın Al</a></li>
                        <li class="nav-item"><a id="scroll" class="nav-link" href="/sanskutusu.php" data-scroll="/sanskutusu.php">Sans Kutusu</a></li>
                        <?php if(isset($_SESSION["login"])){ ?>
                        <li class="nav-item right"><a class="nav-link" href="/profil"><?php echo $login; ?></a></li>
                        <?php }else{ ?>
                            <li class="nav-item right"><a class="nav-link" href="../giris.php">Giriş Yap</a></li>
                        <?php } ?>
                        <?php if(isset($_SESSION["login"])){ ?>
                        <li class="nav-item right"><a class="nav-link" href="/profil/out.php">Çıkış Yap</a></li>
                        <?php }else{ ?>
                            <li class="nav-item right"><a class="nav-link" href="../kayit.php">Kayıt Ol</a></li>
                        <?php } ?>
                                            </ul>
                </div>
            </nav>
        </div>
    </div>
</div>