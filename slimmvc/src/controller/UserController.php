<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 05/03/2018
 * Time: 21:09
 */

namespace App\Controller;


use App\Model\UserService;

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
            'firstname'=> $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'age' => $user->getAge()
        ];
        return $args;
    }
}