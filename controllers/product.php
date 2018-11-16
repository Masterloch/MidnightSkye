<?php 

$productID = $_GET['productID'];

singleProductToJSON($productID);

require 'views/product.php';


function singleProductToJSON($productID) {
    echo "<script>";
    echo "var product = " . json_encode($product) . "\n";
    echo "</script>";
}