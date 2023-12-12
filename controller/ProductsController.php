<?php

class ProductsController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('connexion.twig', ['products' => $products]);

    }

}