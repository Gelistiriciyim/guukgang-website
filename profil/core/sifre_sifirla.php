<?php

 include'../../core/core.php' ;

 if (isset($_SESSION["login"])) {

 $login  = $_SESSION["login"];

 $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();

 }



if (strip_tags(isset($_POST["sifirla"]))) {

	$oldpass = md5($_POST["oldpass"]);

	$newpass = $_POST["newpass"];





if ($oldpass !== $kbilgi['password']) {

echo "yanlis";

    

}else{



if (empty($oldpass) || empty($newpass)) {

echo "bos";

}else{

 if (strlen($newpass) <6) {

echo "kucuk";


 }else{



 	$newpass = md5($newpass);

 	$sql = "UPDATE userdatabase SET password = '$newpass' where login='$login'";

 	echo "basarili";
 }

 if ($vt->query($sql)===true) {

 }

 }



}









}



















?>