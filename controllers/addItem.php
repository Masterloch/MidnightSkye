<?php 

$productID = $_GET['product'];
$quantity = $_GET['quantity'];

$product = $pdo->getSingleProduct($productID);
// $cart->addItem($product, $quantity);
// $cart->updateCart();
singleProductToJSON($product, $quantity);
cartToJSON($_SESSION['cart']);
// print_r($_SESSION['cart']);

require 'views/addItem.php';

function singleProductToJSON($product, $quantity) {
    echo "<script>";
    echo "var product = " . json_encode($product) . "\n";
    echo "product.quantity = ($quantity); \n";
    echo "</script>";
}

function cartToJSON($cart) {
    echo '<script>';
    echo "var cartArray = []; \n";
    foreach ($cart as $cartItem) {
        unset($cartItem['description']);
        echo "cartArray.push(" . json_encode($cartItem) . "); \n";
    }
    echo '</script>';
}

