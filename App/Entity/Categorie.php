<?php
namespace App\Entity;

class Categorie {

    private $id;

    private $name;

    public function __construct()
    {
        $this->name = $this->name . "...........";
    }

    public function hydrate($categorie)
    {
        foreach ($categorie as $key => $value) {
            $method = "set".ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
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