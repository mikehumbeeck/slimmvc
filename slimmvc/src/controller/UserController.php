<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:09
 */

namespace App\Controller;


use App\Model\Services\UserService;

class UserController
{
    /** @var UserService */
    private $userService;

    function __construct()
    {
        $this->userService = new UserService();
    }

    public function getUser($id) {
    //Verbinding maken naar model en user uit DB halen
        $user = $this->userService->getUser($id);
        $args = [
            'email'=> $user->getEmail(),
            'id' => $user->getUserid(),//Hebt de id nodig voor de knop
            'password' => $user->getPassword()
        ];
        return $args;
    }

    public function createUser($email, $password) {
        $this->userService->createUser($email, $password);
    }

    public function deleteUser($id) {
        $this->userService->deleteUser($id);
        $args = [
          'message' => "User " . $id . " is gone"
        ];
        return $args;
    }

    public function updatePassword($id, $old_password, $new_password, $rep_password) {
        $this->userService->updatePassword($id, $old_password, $new_password, $rep_password);
    }
}