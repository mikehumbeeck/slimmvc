<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 18/03/2018
 * Time: 14:00
 */

namespace App\Model\Services;


use App\Model\Entities\File;

class FileService
{
    public function getFile($fileid) {
        //Normaal gezien worden hier de gegevens uit de DB gehaald.
        $file = new File("Humbeeck", "Mike", "Kampenhout", 1910, "Kampenhoutsebaan", 186, 83);
        return $file;
    }
}