<?php

// Query database for all products
// foreach bracelet product, echo into javascript bracelet_array
// foreach necklace product, echo into javascript necklace_array
// foreach earring product, echo into javascript earring_array

// $products = $pdo->getAllProducts();
braceletArray($pdo->getBracelets());
necklaceArray($pdo->getNecklaces());
earringArray($pdo->getEarrings());

require 'views/modal.php';
require 'views/gallery.php';

function braceletArray($bracelets) {
    echo '<script>';
    echo "var braceletArray = []; \n";
    foreach ($bracelets as $bracelet) {
        echo "braceletArray.push(" . json_encode($bracelet) . "); \n";
    }
    echo '</script>';
}

function necklaceArray($necklaces) {
    echo '<script>';
    echo "var necklaceArray = []; \n";
    foreach ($necklaces as $necklace) { //necklace
        echo "necklaceArray.push(" . json_encode($necklace) . "); \n";
    }
    echo '</script>';
}

function earringArray($earrings) {
    echo '<script>';
    echo "var earringArray = []; \n";
    foreach ($earrings as $earring) { //earring
        echo "earringArray.push(" . json_encode($earring) . "); \n";
    }
    echo '</script>';
}


