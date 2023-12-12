<?php

class WelcomeController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('default.twig', ['products' => $products]);
    }

}