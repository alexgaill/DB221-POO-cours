<?php
// require_once "Mammifere.php";
namespace App\Animal;

class Chien extends Mammifere {

    protected string $type = "chien";


    /**
     * En ajoutant un constructeur à l'enfant, on écrase le constructeur du parent.
     * Pour pourvoir instancier correctement l'objet, on a besoind'y faire appel.
     * Dans ce cas, on ajoute parent::__construct() dans le constructeur de l'enfant
     *
     * @param string $couleur
     * @param integer $age
     * @param string $type
     */
    public function __construct(string $couleur, int $age, string $type = "chien")
    {
        $this->type = $type;
        parent::__construct($couleur, $age);
    }
    public function aboyer():string
    {
        return "Ouaf";
    }
    /**
     * Erreur car les propriétés sont private donc inaccessible dans les class enfant
     *
     * @return void
     */
    // public function getAgeAndCouleur()
    // {
    //     return $this->couleur ." ". $this->age;
    // }
}