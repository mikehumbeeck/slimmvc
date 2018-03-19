<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 18/03/2018
 * Time: 14:56
 */

namespace App\Model\Db;


use mysqli;

class Connection
{
    static function connect_db() {
        $server = '127.0.0.1'; // this may be an ip address instead
        $user = 'root';
        $pass = 'mysql';
        $database = 'patienten';
        $connection = new mysqli($server, $user, $pass, $database);

        return $connection;
    }
}