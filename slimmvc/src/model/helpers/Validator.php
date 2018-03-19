<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 18/03/2018
 * Time: 18:23
 */

namespace App\Model\Helpers;


class Validator
{
    public static function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public static function validatePassword($password) {
        if (strlen(trim($password)) > 4) {
            return true;
        }
        return false;
    }

}