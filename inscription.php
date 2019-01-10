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

    <form class="form-inscription" method="post" action="inscription_ctrl.php">
        <label class="text-login-inscript" for="login">PSEUDO</label>
        <input class="inpt-login-inscript rounded inpt" type="text" name="login" placeholder="Pseudo" value="" maxlength="25" required="true">
        <!-- /Username -->


        <label class="text-email" for="email">EMAIL</label>
        <input class="inpt-email rounded inpt" type="email" name="email" placeholder="exemple@domaine.com" value="" maxlength="25" required="true">
        <!-- /email -->


        <label class="text-birthday" for="birthday">DATE DE NAISSANCE</label>
        <input class="inpt-birthday rounded inpt" type="date" name="birthday" placeholder="JJ/MM/AAAA" value="" maxlength="10" required="true">

        <!-- /Birthday -->

        <label class="text-pass-inscript" for="pass">MOT DE PASSE</label>
        <input class="inpt-pass-inscript rounded inpt" type="password" name="password" value="" placeholder="* * * * * * *" maxlength="25">
        <!-- /Password  -->

        <label class="text-pass-inscript2" for="pass">CONFIRMEZ MOT DE PASSE</label>
        <input class="inpt-pass-inscript2 rounded inpt" type="password" name="password2" value="" placeholder="* * * * * * *" maxlength="25" required="true">
        <!-- /Password 2  -->


        <div class="checkbox-inscript">
            <input id="checkMe2" class="checkbox-inscript" type="checkbox" required="true"><label for="checkMe2"class="text-checkbox-inscript">J'ai lu et j'accepte les conditions générales</label>
        </div>
        <!-- /Checkbox conditions -->

        <a> <button type="submit" class="bt-valide" id="valide-inscription">✔
            </button></a>
        <!-- /Button valide -->

    </form>
</div>




</body>


</html>