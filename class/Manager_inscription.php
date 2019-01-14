<?php
/**
 * Created by PhpStorm.
 * User: micfi
 * Date: 10/01/2019
 * Time: 14:36
 */

class Manager_inscription
{
    private $_db; // Instance de PDO

    /**
     * Manager_inscription constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->setDb($pdo);
    }

    public function setDb(PDO $pdo)
    {
        $this->_db = $pdo;
    }

    public function isPseudoExist($post)
    {
        $pseudo = $post['login'];
        if (empty($pseudo)) {
            header("Location: inscription.php");
        } else {

            $sql = $this->_db->query("SELECT count(login) FROM players WHERE login='.$pseudo.'");
            $tmp = $sql->fetch(PDO::FETCH_ASSOC);
            $data = $tmp["count(login)"];
            if ($data == 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function pushUser(user $user){
        
    }



}
