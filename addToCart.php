<?php
session_start();

require_once("handlers/connect.php");
require_once("handlers/db.php");

$productID=$_GET['id'];

$product = getWhere('products','id='.$productID);


echo '<pre>';
print_r($product);
echo '</pre>';

$prod = [
    'name' => $product[0]['name'],
    'price'=> $product[0]['price'],
    /*'quantity' => $product[0]['quantity'],*/
    'qtyUser' => 1,
    'img' => $product[0]['img']
];

echo '<pre>';
print_r($prod);
echo '</pre>';

if(isset($_SESSION['cart'])){
    
  $_SESSION['cart'][$productID] = $prod;
}else{
    $_SESSION['cart'] = [];
    $_SESSION['cart'][$productID] = $prod;
}


$_SESSION['successAddToCart'] ="add to cart ";
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';

header("Location: Products.php");
?>