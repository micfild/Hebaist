<?php
/**
 * Created by PhpStorm.
 * User: micfi
 * Date: 10/01/2019
 * Time: 14:36
 */

class Manager_inscription
{

//    public function control_master(User $user) {
//        if (controlName($user) == false) {
//            echo 'pb de nom';
//        }else{
//            if
//        }
//    }

    private function controlName(User $user)
    {
        if (empty($user->name)) {
            header("Location: inscription.php");
        } else {

            $sql = $this->_db->query("SELECT name FROM players WHERE login = '$user->name'");
            if ($sql == null) {
                return true;
            } else {
                return false;
            }
        }
    }
}
