<?php
//Affiche le chemin vers les sessions
//echo session_save_path();

// first thing is to start session
session_start();
// now to check if variable is true


if(!$_SESSION['logged'])
{
    header('location:login.php');
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
    <img alt="background" id="bkimg" src="assets/pics/background_img.jpg"/>
    <img alt="bloc notes" id="bloc" src="assets/pics/bloc.png"/>
    <img alt="loupe" id="loupe" src="assets/pics/loupe.png"/>
    <img alt="lunettes" id="lunettes" src="assets/pics/lunettes.png"/>
    <img alt="appareil photo" id="apn" src="assets/pics/appareil.png"/>
    <img alt="crayon" id="crayon" src="assets/pics/crayon.png"/>
    <img alt="logo" id="logo" src="assets/pics/logo.png"/>
    <button type="button" class="bt-accueil" id="quitter">
        <img alt="pause" class="color-bt" src="assets/pics/quitter.svg"/>
    </button>
    <button type="button" class="bt-accueil" id="pause">
        <img alt="quitter" class="color-bt" src="assets/pics/pause.svg"/>
    </button>
    <button type="button" class="bt-valide" id="valide-jeu">✔
    </button>
</div>

</body>
</html>