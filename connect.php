<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=masraflar;charset=utf8", "masraflar", "");
} catch (PDOException $e) {
   echo $e->getMessage();
}

?>