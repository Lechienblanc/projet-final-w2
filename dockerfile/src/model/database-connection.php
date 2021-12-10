<?php

try {
$pdo = new PDO('mysql:host=db;dbname=article', 'root', 'example');
} catch (PDOException $e) {
    exit('Database error. ');
}

?>