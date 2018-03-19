<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 18/03/2018
 * Time: 13:52
 */

namespace App\Model\Entities;


class File
{
    private $fileid;
    private $fname;
    private $name;
    private $city;
    private $postal_code;
    private $street;
    private $body_length;
    private $body_weight;

    function __construct($fname, $name, $city, $postal_code, $street, $body_length, $body_weight)
    {
        $this->fname = $fname;
        $this->name = $name;
        $this->city = $city;
        $this->postal_code = $postal_code;
        $this->street = $street;
        $this->body_length = $body_length;
        $this->body_weight = $body_weight;
    }

    /**
     * @return mixed
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     * @param mixed $fileid
     */
    public function setFileid($fileid): void
    {
        $this->fileid = $fileid;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getBodyLength()
    {
        return $this->body_length;
    }

    /**
     * @param mixed $body_length
     */
    public function setBodyLength($body_length): void
    {
        $this->body_length = $body_length;
    }

    /**
     * @return mixed
     */
    public function getBodyWeight()
    {
        return $this->body_weight;
    }

    /**
     * @param mixed $body_weight
     */
    public function setBodyWeight($body_weight): void
    {
        $this->body_weight = $body_weight;
    }


}