<?php
include '../core/core.php';

/* Üye Ol */
if (isset($_POST["register"])) {

    $email     = strip_tags(trim($_POST["email"]));
    $login =strip_tags(trim($_POST["login"]));
    $password     =strip_tags(trim($_POST["password"]));
    $password2    =strip_tags(trim($_POST["password2"]));
    $kod    = md5(rand(0,9999999999));
    $bugun = date('d-m-y')."20";
    $secretKey = "6LdgfhsaAAAAAGD-y_qD1OaGkEL2WTNgoenesFaC";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);

    if ($response->success)
        if (empty($email) || empty($login) || empty($password) || empty($password2) ){
            echo "bos";
        }else{
            $kullanicivarmi = $vt->prepare("select * from userdatabase where login=? || email=?");
            $kullanicivarmi-> execute(array($login,$email));
            $varmi          = $kullanicivarmi->rowCount();

                if ($varmi>0) {
                    echo "var";
                }else{
                    if ($password==$password2) {
                        $password     =md5($_POST["password"]);
                        $password2    =md5($_POST["password2"]);
                        $kullaniciekle= $vt->prepare("INSERT into userdatabase set email=?, login=?, password=?, kayit=?");
                        $kullaniciekle->execute(array($email,$login,$password,$bugun));
                        if ($kullaniciekle) {
                            $_SESSION["login"]=$login;
                            $_SESSION["password"]=$password;
                            echo "ok";


                        }else{
                           echo "olmadi";
                        }
                    }else{
                        echo "sifre";

                    }
                }
            }
        }
    else
        echo "dogrulama";
}



if (isset($_POST["gonder"])) {
    $login  =strip_tags(trim($_POST["login"]));
    $password   =md5($_POST["password"]);
    $kullanicivarmi= $vt->prepare("select * from 	userdatabase where login=? && password=?");
    $kullanicivarmi->execute(array($login,$password));
    $row= $kullanicivarmi->rowCount();
    $secretKey = "6LdgfhsaAAAAAGD-y_qD1OaGkEL2WTNgoenesFaC";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);
    if ($response->success)
        if ($row>0) {
            $_SESSION["login"]=$login;
            $_SESSION["password"]=$password;
            echo "basarili";

        }else{
            echo "no";
        }
    else
        echo "dogrulama";
}







?>
