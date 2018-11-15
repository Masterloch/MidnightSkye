<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$type = $_GET['type'];

//select * products from products table.
//assign selection to array
//foreach array item, order them by priority
//output each item in a card slot


productsToJSON();

require 'views/store.php';


// ----------------------------------------------------------------------------
// This function queries the database for relevent products 
// and then echo's each one out as a JSON variable to the view
// ----------------------------------------------------------------------------
function productsToJSON() {
    $result = [0, 1, 2, 3, 4, 5, 6];

    $result [0] = [
        'id' => 1,
        'name' => 'Sea Shell Necklace WOW',
        'price' => '100.0',
        'description' => 'Ilikebutts'
    ];
    $result [1] = [
        'id' => 2,
        'name' => 'Sea Shell Necklace WOWSea Shell Necklace WOW',
        'price' => '$' . '200.0',
        'description' => 'Ilikebutts'
    ];
    $result [2] = [
        'id' => 3,
        'name' => 'Sea Shell Necklace WOW',
        'price' => '300.0',
        'description' => 'Ilikebutts'
    ];
    $result [3] = [
        'id' => 4,
        'name' => 'Sea Shell Necklace WOWSea Shell Necklace WOW',
        'price' => '3412.0',
        'description' => 'I like butts'
    ];
    $result [4] = [
        'id' => 5,
        'name' => 'Sea Shell Necklace WOWSea Shell Necklace WOWSea Shell Necklace WOW',
        'price' => '3.0',
        'description' => 'I like butts'
    ];
    $result [5] = [
        'id' => 6,
        'name' => 'Sea Shell Necklace WOWSea Shell Necklace WOW',
        'price' => '3.0',
        'description' => 'I like butts'
    ];
    $result [6] = [
        'id' => 7,
        'name' => 'Sea Shell Necklace WOW',
        'price' => '3.0',
        'description' => 'I like butts'
    ];

    echo "<script>";
    echo "var product_array = []; \n"; //create product array
    $i = 1;
    foreach ($result as $product) {
        echo "product_array.push(" . json_encode($product) . "); \n";
        $i++;
    }
    echo "</script>";
}