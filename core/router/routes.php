<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$router->define([
    '' => 'controllers/index.php',
    'home' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'store' => 'controllers/store.php',
    'schedule' => 'controllers/schedule.php',
    'contact' => 'controllers/contact.php',
    'gallery' => 'controllers/gallery.php',
    'store/product' => 'controllers/product.php',
    'cart' => 'controllers/cart.php',
    'cart/added' => 'controllers/addItem.php',
    'checkout' => 'controllers/checkout.php'
]);