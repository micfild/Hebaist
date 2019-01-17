<?php
if($_POST){
    require "config.php";
    include "function.php";

    $_sel = 'bgcpQNu2ILA0hVkRTSUlqvdO48M6s9jamBZWoiXe';

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Stop");
    }
    if(strlen($_POST['login']) <= 5){
        die("Pas assez long");
    }
    if ($_POST['password'] == $_POST['password2']){
        $cryptpass = crypt($_POST['password'], $_sel);
    }else{
        die("Mots de passe differents");
    }





    if (!isLoginfree($_POST, $pdo)){
        die("Login déjà utilisé");
    }else {

        $user_data = [
            'login' => $_POST['login'],
            'email' => $_POST['email'],
            'birthday' => $_POST['birthday'],
            'password' => $cryptpass,
            'avatar_id' => 1,
        ];


        $sql = "INSERT INTO `players` (`login`, `mail`, `birth_date`, `passwd`, `avatar_id`) VALUES (:login, :email, :birthday, :password, :avatar_id)";
        $req = $pdo->prepare($sql);


        $req->execute($user_data);

        $count = $req->rowCount();

        if ($count == 1) {
            session_start();
            $_SESSION['logged'] = "C'est pas faux";
            header('location:index.php');
        }
    }
}
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


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

    <!--		//////////////////inscription/////////////////////-->

    <form class="form-inscription" method="post" action="inscription.php">
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

        <a> <button type="submit" class="bt-valide" id="valide-inscription">✔</button></a>
        <!-- /Button valide -->

        <button type="button" class="btn-modal-avatar btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Choix de l'avatar
        </button>
        <!-- modal choix avatar -->


        <div class="error_display">

        </div>


    </form>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>booh!!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</html>