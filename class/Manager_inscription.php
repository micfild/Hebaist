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

        $sql = $this->_db->query("SELECT count(login) AS ctrl FROM players WHERE login=".$pseudo);
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        var_dump($data);
            if ($data["ctrl"] != '0') {
                return false;
            } else {
                return true;
            }
    }

    public function pushUser(user $user){

        $adduser = $this->_db->prepare('INSERT INTO players(login, mail, birth_date, passwd) VALUES(:login, :email, :birth_date, :cryptpwd)');
        $adduser->bindValue(':login', $user->getName(), PDO::PARAM_STR);
        $adduser->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $adduser->bindValue(':birth_date', $user->getBirth(), PDO::PARAM_STR);
        $adduser->bindValue(':cryptpwd', $user->getPwd1(), PDO::PARAM_STR);
        $adduser->execute();

    }
}
