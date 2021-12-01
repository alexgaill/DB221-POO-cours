<?php

// use App\Faker\FakerData;

use App\Controller\ArticleController;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

// $faker = new FakerData;

// var_dump($faker->fakeUser());
// echo "<br>";
// var_dump($faker->fakePaiement());
// echo "<br>";
// var_dump($faker->fakeArticle());

// $categorieClass = new Categorie;
// // !empty pas obligatoire car on a is_numeric
// if(isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
//     $categorieClass->getCategorie($_GET["id"]);
// } else {
//     $categorieClass->getCategories();
// }

$articleController = new ArticleController;
// if(isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
//     $articleClass->getArticle($_GET["id"]);
// } else {
//     $articleClass->getArticles();
// }

// $categorieClass->addCategorie($_POST);
$articleController->getArticles();

/**
 * Refaire les mêmes méthodes pour la table article
 */