<?php
if(isset($_POST['score'])){
    $score = $_POST['score'];
    $req = $bdd->prepare("INSERT INTO scores SET score = $score");
    <!--$req->execute(array("valeur" => $score));-->
}
?>


