<?php
ob_start();
session_start();
 include "connect.php";

if (isset($_POST['loggin'])) {
   
$users_name=$_POST['users_name'];
$users_password=md5($_POST['users_password']);

if ($users_name && $users_password) {
$askusers=$db->prepare("SELECT * FROM users WHERE users_name=:users_name and users_password=:users_password");
 
$askusers->execute(array(
   'users_name'=> $users_name,
   'users_password'=>$users_password
));
/*echo*/ $say=$askusers->rowCount();
//exit;
if ($say>0) {
   $_SESSION['users_name'] = $users_name;
   header ("Location:index.php");
}else {
   header ("Location:index.php?durum=no");
}
}

}


if(isset($_POST['kayitol'])){
   $ekle = "INSERT INTO users (users_name,users_password,users_mail) VALUES ('".$_POST["name"]."','".md5($_POST['password'])."','".$_POST['mail']."')";
 
    if ($db->query($ekle)){
       header ("Location:../index.php?durum=uyeoldun");
    }
    else{
       header ("Location:index.php?durum=uyeolamadin");
    }
    }
 


?>