<?php

class BiscuitsController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('Biscuits.twig', ['products' => $products]);

    }

}