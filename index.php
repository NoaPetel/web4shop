<?php

require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader("View");
$twig = new \Twig\Environment($loader);

require 'Controller/routeur.php';

/* templates chargés à partir du système de fichiers (répertoire vue) */
$loader = new Twig\Loader\FilesystemLoader('view');
/* options : prod = cache dans le répertoire cache, dev = pas de cache */
$options_prod = array('cache' => 'cache', 'autoescape' => true);
$options_dev = array('cache' => false, 'autoescape' => true);
/* stocker la configuration */

$twig = new Twig\Environment($loader);
/* charger+compiler le template, exécuter, envoyer le résultat au navigateur */


echo $twig->render('default.twig', ['products' => $donnees]);
