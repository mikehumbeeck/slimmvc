<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 18/03/2018
 * Time: 14:06
 */

namespace App\Model\Db;


use App\Model\Entities\User;
//Verbinding model en DB

class UserDAO
{
    function addUser(User $user) {
        //Add insert naar DB
        $db = Connection::connect_db();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $result = $db->query( "INSERT INTO patienten.user (user_email, user_password) VALUES ('$email', '$password')"  );

    }

    function getUser($id) {
        $db = connection::connect_db();
        $result = $db->query("SELECT * FROM patienten.user WHERE user_id = '$id' LIMIT 1 ");
        $result = $result->fetch_assoc();
        return User::constructWithId($result['user_id'], $result['user_email'], $result['user_password']);
        // Je kan maar een constructor hebben maar omdat we ook een id nodig hebben en geen 2 constructors in php kunnen maken is er een statische methode

    }

    function deleteUser($id) {
        $db = Connection::connect_db();
        $db->query("DELETE FROM patienten.user WHERE user_id='$id' ");
    }

    public function updatePassword($id, $new_password, $oldpassword) {
        $db = connection::connect_db();
        $db->query("UPDATE patienten.user SET user_password = '$new_password' WHERE user_id= '$id' AND user_password= '$oldpassword' ");
    }

}