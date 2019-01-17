<?php

function isLoginfree ($post, $pdo){

    $user_login = [
        'username' => $post['login'],
    ];


    $rsql = "SELECT login FROM players WHERE login = :username";
    $req = $pdo->prepare($rsql);
    $req->execute($user_login);
    $data = $req->fetch();


    var_dump($data);
    if ($data == false){
        return true;
    }else{
        return false;
    }

}