<?php
ob_start();
session_start();
 include "connect.php";

if (isset($_POST['loggin'])) {
   
$kullanici_ad=$_POST['kadi'];
$kullanici_password=md5($_POST['sifre']);

if ($kullanici_ad && $kullanici_password) {
$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_ad=:ad and kullanici_password=:password");
 
$kullanicisor->execute(array(
   'ad'=> $kullanici_ad,
   'password'=>$kullanici_password
));
/*echo*/ $say=$kullanicisor->rowCount();
//exit;
if ($say>0) {
   $_SESSION['kullanici_ad'] = $kullanici_ad;
   header ("Location:../index.php");
}else {
   header ("Location:index.php?durum=no");
}
}

}


if(isset($_POST['kayitol'])){
   $ekle = "INSERT INTO kullanici (kullanici_ad,kullanici_password,kullanici_mail) VALUES ('".$_POST["name"]."','".md5($_POST['password'])."','".$_POST['mail']."')";
 
    if ($db->query($ekle)){
       header ("Location:../index.php?durum=uyeoldun");
    }
    else{
       header ("Location:index.php?durum=uyeolamadin");
    }
    }
 


?>