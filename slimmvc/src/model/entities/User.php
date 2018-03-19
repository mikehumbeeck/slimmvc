<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:02
 */

namespace App\Model\Entities;


class User
{
    private $userid;
    private $email;
    private $password;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    //2 de constructor (wanneer je een user oproept)
    public static function constructWithId($userid, $email, $password) {
        $user = new User($email, $password);
        $user->setUserid($userid);
        return $user;
    }

    public function setUserid($userid): void
    {
        $this->userid = $userid;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function getUserid()
    {
        return $this->userid;
    }
}