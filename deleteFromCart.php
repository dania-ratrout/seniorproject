<?php
session_start();

echo $productID=$_GET['id'];

echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';

unset($_SESSION['cart'][$productID]);

echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
header("Location: cart.php");
?>