<?php
namespace App\Model;

use Core\Model\DefaultModel;

class CategorieModel extends DefaultModel{

    protected $table = "categorie";

    /**
     * Undocumented function
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