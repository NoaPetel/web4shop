<?php

class FruitsController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('Fruits.twig', ['products' => $products]);

    }

}