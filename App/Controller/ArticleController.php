<?php
namespace App\Controller;

use App\Model\UserModel;
use App\Model\ArticleModel;
use Core\Database\Database;
use App\Model\CategorieModel;

class ArticleController {

    public function getArticles()
    {
        $articles = (new ArticleModel)->findAll();
        require ROOT."/templates/Article/index.php";
    }

    public function getArticle(int $id)
    {
        $article = (new ArticleModel)->find($id);
        require ROOT."/templates/Article/single.php";
    }

    public function addArticle($article)
    {
        if (!empty($article)) {
            if ((new ArticleModel)->saveArticle($article)) {
                header("Location: index.php");
            }
        }

        $categories = (new CategorieModel)->findAll();
        $users = (new UserModel)->findAll();
        require ROOT."/templates/Article/save.php";
    }
}