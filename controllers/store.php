<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$type = $_GET['type'];
$products = $pdo->getProducts();
//select * products from products table.
//assign selection to array
//foreach array item, order them by priority
//output each item in a card slot
productsToJSON($products, $type);

require 'views/store.php';


// ----------------------------------------------------------------------------
// This function queries the database for relevent products 
// and then echo's each one out as a JSON variable to the view
// ----------------------------------------------------------------------------
function productsToJSON($products, $type) {

    echo "<script>";
    echo "var product_array = []; \n"; //create product array
    $i = 1;
    foreach ($products as $product) {
        if ($product['product_type_id'] == $type) {
            echo "product_array.push(" . json_encode($product) . "); \n";
        }
    }
    echo "</script>";
}
