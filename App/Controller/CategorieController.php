<?php
namespace App\Controller;

use App\Model\CategorieModel;
use Core\Controller\DefaultController;

class CategorieController extends DefaultController {

    /**
     * Page des catégories
     *
     * @return void
     */
    public function index()
    {
        $this->render("Categorie/Index", [
            "categories" => (new CategorieModel)->findAll()
        ]);
    }

    /**
     * Page d'une catégorie
     *
     * @param integer $id
     * @return void
     */
    public function single()
    {
        if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
            $this->render("Categorie/single", [
                "categorie" => (new CategorieModel)->find($_GET["id"])
            ]);
        } else {
            $this->redirectToRoute("/Categorie/index");
        }
    }

    /**
     * Page d'ajout d'une catégorie
     *
     * @param array $categorie
     * @return void
     */
    public function addCategorie(array $categorie)
    {
        if (!empty($categorie)) {
            if ((new CategorieModel)->saveCategorie($categorie)) {
                header("Location: index.php");
            }
        }
        $this->render("Categorie/save");
    }
}
