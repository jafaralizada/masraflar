<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=masraflar;charset=utf8", "masraflar", "12345");
} catch (PDOException $e) {
   echo $e->getMessage();
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Bağlantı başarılı"; 
}
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>