<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method array findAll() Retourne tous les articles
 * @method Article find(int $id) Retourne un article en fonction de son id
 */
class ArticleModel extends DefaultModel{

    protected $table = "article";

    /**
     * Undocumented function
     *
     * @param array $categorie
     * @return bool
     */
    public function saveArticle(array $categorie)
    {
        $statement = "INSERT INTO article 
        (title, content, categorie_id, user_id, picture)
        VALUES (:title, :content, :categorie_id, :user_id, :picture)
        ";
        return $this->save($statement, $categorie);
    }
}