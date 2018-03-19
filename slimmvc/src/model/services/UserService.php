<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:10
 */

namespace App\Model\Services;


use App\Model\Db\UserDAO;
use App\Model\Entities\User;
use App\Model\Helpers\Validator;

class UserService
{
    private $userDAO;

    function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function createUser($email, $password) {
        if (Validator::validateEmail($email) && Validator::validatePassword($password)) {
            $user = new User($email, sha1($password)); //encryptie van pass
            $this->userDAO->addUser($user);
            return true;
        }
        return false;
    }


    public function getUser($id) {
        //Normaal gezien worden hier de gegevens uit de DB gehaald. //read
        return $this->userDAO->getUser($id);

    }

    public function updateUser() {

    }

    public function deleteUser($id) {
        $this->userDAO->deleteUser($id);
    }

    public function updatePassword($id, $old_password, $new_password, $rep_password) {
        if ($rep_password == $new_password) {
            $this->userDAO->updatePassword($id, sha1($new_password), sha1($old_password));
        }
    }
}