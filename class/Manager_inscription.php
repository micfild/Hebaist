<?php
/**
 * Created by PhpStorm.
 * User: micfi
 * Date: 10/01/2019
 * Time: 14:36
 */

class Manager_inscription
{
    private $_db = connexion();

    private function connexion() {
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
    }

    public function control_master(User $user) {
        if (controlName($user) == false) {
            echo 'pb de nom';
        }else{
            if
        }
    }

    private function controlName(User $user) {
        if (empty($user->name)){
            header("Location: inscription.php");
        }else{

            $sql = $this->_db -> query("SELECT name FROM players WHERE login = '$user->name'");
            if($sql == null){
                return true;
            }else{
                return false;
            }
        }
    }

    private function 

}