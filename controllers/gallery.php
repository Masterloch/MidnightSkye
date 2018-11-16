<?php

// Query database for all products
// foreach bracelet product, echo into javascript bracelet_array
// foreach necklace product, echo into javascript necklace_array
// foreach earring product, echo into javascript earring_array

$products = $pdo->getProducts();
braceletArray($products);
necklaceArray($products);
earringArray($products);

require 'views/modal.php';
require 'views/gallery.php';

function braceletArray($products) {
    echo '<script>';
    echo "var braceletArray = []; \n";
    foreach ($products as $bracelet) {
        if ($bracelet['product_type_id'] == 1) { //bracelet
            echo "braceletArray.push(" . json_encode($bracelet) . "); \n";
        }
    }
    echo '</script>';
}

function necklaceArray($products) {
    echo '<script>';
    echo "var necklaceArray = []; \n";
    foreach ($products as $necklace) { //necklace
        if ($necklace['product_type_id'] == 2) {
            echo "necklaceArray.push(" . json_encode($necklace) . "); \n";
        }
    }
    echo '</script>';
}

function earringArray($products) {
    echo '<script>';
    echo "var earringArray = []; \n";
    foreach ($products as $earring) { //earring
        if ($earring['product_type_id'] == 3) {
            echo "earringArray.push(" . json_encode($earring) . "); \n";
        }
    }
    echo '</script>';
}


