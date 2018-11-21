<?php

class Cart {
    private static $instance = null;
    public static $items;

    private function __construct(array $cartItems = []) {
        self::$items = $cartItems;
    }

    public static function getInstance() {
        if ((is_null(self::$instance)) && isset($_SESSION['cart'])) {   //If current instance is null, but a session exists
            self::$instance = new Cart($_SESSION['cart']);              //create new cart with session array
        }
        elseif (is_null(self::$instance)) {                             //if current instance is null, but a session DOESNT exist
            self::$instance = new Cart();                               //create a new cart that contains an empty array
            $_SESSION['cart'] = self::$items;                           //create the cart session with an empty array of items
        }
        return self::$instance; //return the instance
    }

    public function getItems() {
        print_r(self::$items);
    }

    public function addItem($product, $quantity) {
        $product['quantity'] = $quantity;
        array_push(self::$items, $product);
    }
    public function updateCart() {
        $_SESSION['cart'] = self::$items;
    }
}