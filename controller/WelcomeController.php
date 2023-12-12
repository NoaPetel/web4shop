<?php

class WelcomeController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('accueil.twig', ['products' => $products]);
    }

}