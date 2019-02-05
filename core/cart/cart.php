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
        return self::$items;
    }

    public function addItem($product, $quantity) {
        $itemInCart = False;

        foreach (self::$items as $key => $value) {                  //Search each item in the cart
            if (self::$items[$key]['id'] == $product['id']) {       //If we find the product already in the cart, 
                $itemInCart = True;                                 //update the quantity of the item.
                self::$items[$key]['quantity'] += $quantity;
            }
        }
        if ($itemInCart == False) {                 //If we search all products in the cart and don't find
            $product['quantity'] = $quantity;       //the item in the cart, add to the cart
            array_push(self::$items, $product);     
        }

        $_SESSION['cart'] = self::$items;           //After we add the item to the cart, add the items to the session.
    }
}