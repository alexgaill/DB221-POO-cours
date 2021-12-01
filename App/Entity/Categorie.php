<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Categorie extends DefaultEntity{

    private $id;

    private $name;

    // public function __construct()
    // {
    //     $this->name = $this->name . "...........";
    // }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}