<?php
require __DIR__.'./Cart.php';
$cart = Cart::create();
$cart2 = Cart::create();
$cart3 = unserialize(serialize($cart));

echo '<pre>';
var_dump($cart3);
var_dump($cart2);
