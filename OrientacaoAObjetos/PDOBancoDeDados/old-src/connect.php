<?php
declare (strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=localhost;dbname=bh', 'root' , '');
    } catch (Exception $e){
        echo $e->getMessage();
        die();
    }


return $pdo;