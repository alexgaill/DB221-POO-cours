<?php

// Une class est une représentation d'objets que l'on pourra instancier
class Chat {

    // Un objet possède des propriétés ou attributs (des variables)
    /**
     *
     * @var string
     */
    private $couleur;

    /**
     * Undocumented variable
     *
     * @var integer
     */
    public int $age;


    /**
     * Créé un nouveau chat
     *
     * @param string $couleur
     * @param integer $age
     */
    public function __construct(string $couleur, int $age = 4)
    {
        $this->couleur = $couleur;
        $this->age = $age;
    }
    // Un objet possède des méthodes (des fonctions)

    /**
     * Pour travailler le plus facilement possible on commente et on type au maximum 
     * nos propriétés et nos fonctions
     *
     * @param string|int $cri
     * @return string|bool
     */
    function miauler (string $cri):string
    {
        return $cri;
    }

    /**
     * Lorsqu'une propriété est privée, elle n'est pas accessible en dehors de la class. 
     * On se sert de la visibilité (public, private) pour limiter l'accès ou non à des infos
     * Une propriété private va généralement 
     * 
     * avoir une méthode permettant d'accéder à l'information on l'appelle un getter ou accesseur
     * 
     * peut avoir une méthode permettant de modifier l'information,
     * on l'appelle setter ou mutateur
     *
     * @return string
     */
    public function getCouleur():string
    {
        return $this->couleur;
    }

    /**
     * Mutateur ou setter de couleur
     *
     * @param string $couleur
     */
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }
}