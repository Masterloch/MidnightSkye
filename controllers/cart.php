<?php 

cartToJSON($_SESSION['cart']);

require 'views/cart.php';

function cartToJSON($cart) {
    echo '<script>';
    echo "var cartArray = []; \n";
    foreach ($cart as $cartItem) {
        unset($cartItem['description']);
        echo "cartArray.push(" . json_encode($cartItem) . "); \n";
    }
    echo '</script>';
}