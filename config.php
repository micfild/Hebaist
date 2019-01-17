<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hebaist';

try{
    $strConnexion = 'mysql:host='.$db_host.';dbname='.$db_name;
    $pdo = new PDO($strConnexion, $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    $message = 'ERREUR PDO dans' . $e->getFile() . ' L.' .$e->getLine() .' : '.
        $e->getMessage();

    die($message);
}