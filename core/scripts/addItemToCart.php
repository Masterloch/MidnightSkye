<?php 

$productID = $_POST['productID'];
$quantity = $_POST['quantity'];

$product = $pdo->getSingleProduct($productID);
$cart->addItem($product, $quantity);