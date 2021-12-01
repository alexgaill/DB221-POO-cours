<?php
namespace App\Controller;

use App\Model\UserModel;
use App\Model\ArticleModel;
use App\Model\CategorieModel;
use Core\Controller\DefaultController;

class ArticleController extends DefaultController{

    /**
     * Page Index
     *
     * @return void
     */
    public function getArticles()
    {
        $this->render("Article/index", [
            "articles" => (new ArticleModel)->findAll()
        ]);
    }

    /**
     * Page d'un article
     *
     * @param integer $id
     * @return void
     */
    public function getArticle(int $id)
    {
        $this->render("Article/single", [
            "article" => (new ArticleModel)->find($id)
        ]);
    }

    /**
     * Page d'ajout d'un article
     *
     * @param array $article
     * @return void
     */
    public function addArticle($article)
    {
        if (!empty($article)) {
            if ((new ArticleModel)->saveArticle($article)) {
                header("Location: index.php");
            }
        }

        $this->render("Article/save", [
            "categories" => (new CategorieModel)->findAll(),
            "users" => (new UserModel)->findAll()
        ]);
    }
}