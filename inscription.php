<?php

require "class/User.php";
require "class/Manager_inscription.php";

$_sel = 'bgcpQNu2ILA0hVkRTSUlqvdO48M6s9jamBZWoiXe';

try {
    $strConnexion = 'mysql:host=localhost;dbname=hebaist';
    // connection a la bd et SET attribut de PDO pour travailler en UTF8
    $pdo = new PDO($strConnexion, 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $message = 'ERREUR PDO dans' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($message);
}

function pwdMatch($post)
{
    if (!empty($post)) {
        if ($post['password'] != $post['password2']) {
            return true;
        } else {
            return false;
        }
    }
}

function mailMatch($post){
    if (!empty($post)){
        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
}

if (isset($_POST['login'],$_POST['email'],$_POST['birthday'],$_POST['password'],$_POST['password2'])) {
    if (!pwdMatch($_POST) and !mailMatch($_POST)) {

        $usr = new User();
        $usr->setName($_POST['login']);
        $usr->setEmail($_POST['email']);
        $usr->setBirth($_POST['birthday']);
        $usr->setPwd1(crypt($_POST['password'], $_sel));
        $usr->setPwd2(crypt($_POST['password2'], $_sel));

        echo '<pre style="z-index: 30; color: white;">' . var_export($usr, true) . '</pre>';
    }
}


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
    echo '<!--		//////////////////inscription/////////////////////-->

    <form class="form-inscription" method="post" action="inscription.php">
        <label class="text-login-inscript" for="login">PSEUDO</label>
        <input class="inpt-login-inscript rounded inpt" type="text" name="login" placeholder="Pseudo" value="" maxlength="25" required="true">
        <!-- /Username -->';

    echo '<label class="text-email" for="email">EMAIL</label>
        <input class="inpt-email rounded inpt" type="email" name="email" placeholder="exemple@domaine.com" value="" maxlength="25" required="true">
        <!-- /email -->';

    echo '
        <label class="text-birthday" for="birthday">DATE DE NAISSANCE</label>
        <input class="inpt-birthday rounded inpt" type="date" name="birthday" placeholder="JJ/MM/AAAA" value="" maxlength="10" required="true">

        <!-- /Birthday -->';

    echo '<label class="text-pass-inscript" for="pass">MOT DE PASSE</label>
        <input class="inpt-pass-inscript rounded inpt" type="password" name="password" value="" placeholder="* * * * * * *" maxlength="25">
        <!-- /Password  -->';

    echo '<label class="text-pass-inscript2" for="pass">CONFIRMEZ MOT DE PASSE</label>
        <input class="inpt-pass-inscript2 rounded inpt" type="password" name="password2" value="" placeholder="* * * * * * *" maxlength="25" required="true">
        <!-- /Password 2  -->';

    echo '<div class="checkbox-inscript">
            <input id="checkMe2" class="checkbox-inscript" type="checkbox" required="true"><label for="checkMe2"class="text-checkbox-inscript">J\'ai lu et j\'accepte les conditions générales</label>
          </div>
        <!-- /Checkbox conditions -->

        <a> <button type="submit" class="bt-valide" id="valide-inscription">✔</button></a>
        <!-- /Button valide -->';

    echo '<div class="error_display">';

if (mailMatch($_POST)) {
    echo '<p>Email invalide</p>';
}

if (pwdMatch($_POST) == true){
    echo '<p>Mots de passe differents</p>';
}

if (!empty($_POST)) {
    foreach ($_POST as $cle=>$value){
        if (empty($value)){
            echo 'Le champ '. $cle . 'est obligatoire';
        }
    }
}

    echo '</div>';

    echo '</form>';

?>
</div>




</body>


</html>