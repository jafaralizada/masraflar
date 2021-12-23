<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=masraflar;charset=utf8", "root", "");
} catch (PDOException $e) {
   echo $e->getMessage();
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Bağlantı başarılıı"; 
}
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>