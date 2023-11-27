<?php

function getData()
{
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=web4shop;charset=utf8',
            'root'
        );
    } catch (Exception $e) {
        echo 'PDO problem';
    }

    $products = $db->query('SELECT * FROM PRODUCTS');
    #$productsStatement->execute();
    #$products = $productsStatement->fetchAll();

    #print_r($products);
    return $products;
}