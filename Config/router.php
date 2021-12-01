<?php
/************************ Version ou vous définissez vos routes ***************************/
// use App\Controller\ArticleController;
// use App\Controller\CategorieController;

// if (isset($_GET["page"]) && !empty($_GET["page"])) {
//     switch ($_GET["page"]) {
//         case 'singleArticle':
//             if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
//                 (new ArticleController)->single($_GET["id"]);
//             } else {
//                 (new ArticleController)->index();
//             }
//             break;
//         case 'indexCategorie':
//                 (new CategorieController)->index();
//             break;
        
//         default:
//             (new ArticleController)->index();
//             break;
//     }
// } else {
//     (new ArticleController)->index();
// }


/************************ Version automatisée ***************************/

// var_dump($_SERVER);

$path = $_SERVER["PATH_INFO"] ?? "/article/index";
$path = explode("/", $path);

$controller = "App\Controller\\".ucfirst($path[1])."Controller";
$method = $path[2];

(new $controller)->$method();