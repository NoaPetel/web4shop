<?php

function getProducts()
{
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=web4shop;charset=utf8',
            'root'
        );
    } catch (Exception $e) {
        echo 'PDO problem';
    }

    $query = $db->prepare('SELECT * FROM PRODUCTS');
    $query->execute();
    $products = $query->fetchAll();

    return $products;
}