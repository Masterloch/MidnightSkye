<?php 

$productID = $_GET['productID'];

singleProductToJSON($pdo->getSingleProduct($productID));

require 'views/product.php';

function singleProductToJSON($product) {
    echo "<script>";
    echo "var product = " . json_encode($product) . "\n";
    echo "</script>";
}