<?php
namespace App\Data;

use Core\Database\Database;

class Categorie {

    public function __construct()
    {
        // $db = new Database;
        // $this->pdo = $db->getPDO();
        $this->pdo = (new Database)->getPDO();
    }


    public function getCategories()
    {
        
        $query = $this->pdo->query("SELECT * FROM categorie");
        // $query->setFetchMode(\PDO::FETCH_BOTH); // Valeur par défaut
        // $query->setFetchMode(\PDO::FETCH_ASSOC); // Retourne les valeurs en tableau associatif
        $query->setFetchMode(\PDO::FETCH_OBJ); // retourne les valeurs en objet
        $categories = $query->fetchAll();

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
        $query = $this->pdo->query("SELECT * FROM categorie WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $categorie = $query->fetch();
        include ROOT."/templates/Categorie/single.php";
    }

    public function addCategorie(array $categorie)
    {
        if (!empty($categorie)) {
            $prepare = $this->pdo->prepare("INSERT INTO categorie (name) VALUES (:name)");
            $prepare->execute($categorie);
        }
        include ROOT."/templates/Categorie/save.php";
    }
}
