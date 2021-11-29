<?php
namespace App\Animal;

class Mammifere {

    /**
     * Couleur du chien
     *
     * @var string
     */
    private string $couleur;

    /**
     * Age du chien
     *
     * @var integer
     */
    private int $age;

    protected string $type;

    /**
     * Constructeur de la class
     *
     * @param string $couleur
     * @param integer $age
     */
    public function __construct(string $couleur, int $age)
    {
        $this->couleur = $couleur;
        $this->age = $age;
    }

    /**
     * Get the value of couleur
     *
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param string $couleur
     *
     * @return self
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}