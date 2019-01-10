<?php
/**
 * Created by PhpStorm.
 * User: micfi
 * Date: 10/01/2019
 * Time: 13:31
 */

class user
{
    /**
     * @var string Nom du personnage
     */
    private $name;

    /**
     * @var string Adresse email du user
     */
    private $email;

    /**
     * @var string Date de naissance
     */
    private $birth;

    /**
     * @var string Password 1
     */
    private $pwd1;

    /**
     * @var string Password 2
     */
    private $pwd2;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param string $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

    /**
     * @return string
     */
    public function getPwd1()
    {
        return $this->pwd1;
    }

    /**
     * @param string $pwd1
     */
    public function setPwd1($pwd1)
    {
        $this->pwd1 = $pwd1;
    }

    /**
     * @return string
     */
    public function getPwd2()
    {
        return $this->pwd2;
    }

    /**
     * @param string $pwd2
     */
    public function setPwd2($pwd2)
    {
        $this->pwd2 = $pwd2;
    }
}