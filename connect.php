<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=masraflar;charset=utf8", "masraflar", "12345");
} catch (PDOException $e) {
   echo $e->getMessage();
}

?>