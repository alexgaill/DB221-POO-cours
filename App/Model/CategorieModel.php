<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method array findAll() Retourne toutes les categories
 * @method Article find(int $id) Retourne une categorie en fonction de son id
 */
class CategorieModel extends DefaultModel{

    protected $table = "categorie";

    /**
     * Enregistre un article en BDD
     *
     * @param array $categorie
     * @return bool
     */
    public function saveCategorie(array $categorie)
    {
        $statement = "INSERT INTO categorie (name) VALUES (:name)";
        return $this->save($statement, $categorie);
    }
}