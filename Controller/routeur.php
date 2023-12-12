<?php
/* récupérer le tableau des données */
require 'Model/data.php';
$donnees = getData();

$loader = new \Twig\Loader\FilesystemLoader("View");
$twig = new \Twig\Environment($loader);

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case 'connexion.twig':

        echo $twig->render('connexion.twig');
        break;
    default:
        echo $twig->render('Accueil.twig', ['products' => $donnees]);
        break;
}