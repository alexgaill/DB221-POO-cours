<?php

define("ROOT", __DIR__);
use App\Animal\Chat;
use App\Animal\Chien;
use App\Animal\Mammifere;
/**
 * Include permet de charger un fichier.
 * Si celui-ci n'est pas trouvé, le code affiche une warning error 
 * et le script continue d'être lu.
 * 
 * Require permet de charger un fichier.
 * Si celui-ci n'est pas trouvé, le code affiche une fatal error et le script est arrêté.
 */
// require "Class/Chat.php";
// require "Class/Chien.php";

// require ROOT."/Core/Autoload.php";
require ROOT. "/vendor/autoload.php";
// Register est une méthode static donc pas besoin d'instancier
// $autoload = new Autoload;
// $autoload->register();
// Autoload::register();

echo "coucou";
// Pour créer un objet, on doit instancier la class qui correspond
$chat = new Chat("gris", 2);
// Pour utiliser une propriété, on doit utiliser l'écriture suivante: $objet->propriété
echo "<br>";
echo $chat->getCouleur();
echo "<br>";
// Pour utiliser une méthode, on doit utiliser l'écriture suivante: $objet->méthode()
// echo $chat->miauler("miaou");

$chat2 = new Chat("marron", 1);
$chat2->setCouleur("marron");
echo "<br>";
echo "<br>";
// echo $chat2->getConst();
echo "<br>";
echo Chat::TYPE;
echo "<br>";
echo Chat::$cri;
echo "<br>";
echo Chat::getCri();
echo "<br>";

echo "<br>";
// var_dump($chat);
echo "<br>";
// var_dump($chat2);
echo "<br>";
$chien1 = new Chien("brungé", 4);
$chien2 = new Chien("blanc", 8);

var_dump($chien1);
echo "<br>";
var_dump($chien2);
echo "<br>";

echo $chien1->getCouleur();
// echo $chien1->getAgeAndCouleur();
echo "<br>";
echo $chien2->getCouleur();
echo "<br>";

$mam = new Mammifere("gris", 3);
var_dump($mam);