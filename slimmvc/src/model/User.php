<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:02
 */

namespace App\Model;


class User
{
    private $firstname;
    private $lastname;
    private $age;

    function __construct($firstname, $lastname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    function setLastname($lastname)
    {
        $this->lastname = strtoupper($lastname);
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getFirstname()
    {
        return $this->firstname;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function getLastname()
    {
        return $this->lastname;
    }


}