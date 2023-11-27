<?php
// biblio.php
/* récupérer le tableau des données */
require 'model/data.php';
$donnees = getData();

/* inclure l'autoloader */
require_once 'vendor/autoload.php';

/* templates chargés à partir du système de fichiers (répertoire vue) */
$loader = new Twig\Loader\FilesystemLoader('view');
/* options : prod = cache dans le répertoire cache, dev = pas de cache */
$options_prod = array('cache' => 'cache', 'autoescape' => true);
$options_dev = array('cache' => false, 'autoescape' => true);
/* stocker la configuration */

$twig = new Twig\Environment($loader);
/* charger+compiler le template, exécuter, envoyer le résultat au navigateur */


echo $twig->render('default.twig', ['products' => $donnees]);


