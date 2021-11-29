<?php
namespace App\Animal;
use App\Animal\Mammifere;
// require_once "Mammifere.php";
// Une class est une représentation d'objets que l'on pourra instancier
class Chat extends Mammifere{

    protected string $type = "chat";
    // Déclaration de constante, la valeur ne peut pas changer
    // Une constante peut être public, private ou protected
    public const TYPE = "chat";

    // Une propriété static est une propriété de la class et non de l'objet
    public static $cri = "miaou";
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

    function getConst ()
    {
        return self::TYPE;
    }

    public static function getCri()
    {
        return self::$cri;
    }
}