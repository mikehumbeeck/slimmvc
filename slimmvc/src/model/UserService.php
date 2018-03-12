<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:10
 */

namespace App\Model;


class UserService
{

    public function getUser($id) {
        //Normaal gezien worden hier de gegevens uit de DB gehaald.
        $user = new User("Yassin", "Barrani", 8);
        return $user;
    }
}