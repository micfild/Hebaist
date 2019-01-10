<?php
/**
* Created by PhpStorm.
* User: micfi
* Date: 10/01/2019
* Time: 13:12
*/



require_once "class/user.php";

try{
    $strConnexion = 'mysql:host=localhost;dbname=hebaist';
    // connection a la bd et SET attribut de PDO pour travailler en UTF8
    $pdo = new PDO($strConnexion,'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    $message = 'ERREUR PDO dans' . $e->getFile() . ' L.' . $e ->getLine() . ' : ' . $e->getMessage();
    die($message);
}

$usr = new user();
$usr->setName($_POST['login']);
$usr->setEmail($_POST['email']);


?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="assets/style/style.css" rel="stylesheet">

    <title>Hébaïst</title>
</head>

<body>

<div id="backgound">
    <img alt="background" id="bkimg" src="assets/pics/background_img.jpg" />
    <img alt="bloc notes" id="bloc" src="assets/pics/bloc.png" />
    <img alt="loupe" id="loupe" src="assets/pics/loupe.png" />
    <img alt="lunettes" id="lunettes" src="assets/pics/lunettes.png" />
    <img alt="appareil photo" id="apn" src="assets/pics/appareil.png" />
    <img alt="crayon" id="crayon" src="assets/pics/crayon.png" />
    <img alt="logo" id="logo" src="assets/pics/logo.png" />
    <button type="button" class="bt-accueil" id="quitter">
        <img alt="pause" class="color-bt" src="assets/pics/quitter.svg" />
    </button>
    <button type="button" class="bt-accueil" id="pause">
        <img alt="quitter" class="color-bt" src="assets/pics/pause.svg" />
    </button>
    <?php
    echo '<pre style="z-index: 30; color: white;">' . var_export($usr, true) . '</pre>';
    ?>

</div>




</body>