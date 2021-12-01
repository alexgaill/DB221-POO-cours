<?php
namespace App\Controller;

use App\Model\CategorieModel;

class Controller {

    public function getCategories()
    {
        $categories = (new CategorieModel)->findAll();
        include ROOT."/templates/Categorie/indexTemplate.php";
    }

    /**
     * Affiche une catégorie en fonction de son id
     *
     * @param integer $id
     * @return void
     */
    public function getCategorie(int $id)
    {
        // $id = $_GET["id"];
        $categorie = (new CategorieModel)->find($id);
        include ROOT."/templates/Categorie/single.php";
    }

    public function addCategorie(array $categorie)
    {
        if (!empty($categorie)) {
            if ((new CategorieModel)->saveCategorie($categorie)) {
                header("Location: index.php");
            }
        }
        include ROOT."/templates/Categorie/save.php";
    }
}
