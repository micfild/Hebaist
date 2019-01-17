<?php
if($_POST){
require_once "config.php";

$user_data = [
'login' => $_POST['login'],
'password' => $_POST['password'],
];



$sql = 'SELECT COUNT(login) FROM players WHERE login = :login AND password = :password';
$req = $pdo->prepare($sql);


$req->execute($user_data);

$result = $req->fetch();

if($result[0] == 1){
session_start();
$_SESSION['logged'] = "C'est pas faux";
header('location:index.php');
}
else{
header('location:login.php?connect=fail');
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

	<!--		///////////////////////////////////////////////////-->


	<form class ="form-login"  method="post" action="/Minora/AuthorizeR">
		<label class="text-login" for="login">LOGIN</label>
		<input class="inpt-login rounded inpt" onkeyup="MyFunc(this)" type="text" name="login" placeholder="Pseudo" value="" maxlength="25">
		<!-- /Username -->

		<label class="text-pass" for="pass">MOT DE PASSE</label>
		<input class="inpt-pass rounded inpt" type="password" name="password" value="" placeholder="* * * * * * *" maxlength="25">
		<!-- /Password  -->

		<a href="forget.php"> <div class="checkbox">
			<label for="forget"class="text-checkbox">Mot de passe oublié ?</label>
		</div></a>
		<!-- /Forget -->

		<a href="inscription.php"> <div class="forget">
			<label for="checkMe"class="text-forget">Pas encore inscrit ?</label>
		</div></a>
		<!-- /Checkbox -->

		<a href="index.php"> <button type="button" class="bt-valide" id="valide">✔
		</button></a>
		<!-- /Button valide -->

	</form>


</div>


</body>


</html>
