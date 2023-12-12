<?php

class BoissonsController
{

    function __construct()
    {

    }
    public function render($twig)
    {

        $products = getProducts();
        echo $twig->render('Boissons.twig', ['products' => $products]);

    }

}