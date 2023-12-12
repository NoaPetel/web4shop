<?php

require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader("View");
$twig = new \Twig\Environment($loader);

require 'Controller/routeur.php';

