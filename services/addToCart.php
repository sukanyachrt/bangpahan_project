<?php
session_start();

if(isset($_POST['productId']) && isset($_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    // Add product to session
    $_SESSION['cart'][$productId] = $quantity;
    print_r($_SESSION['cart']);
    //echo $quantity; // Send success response back to the client
} else {
    echo 'error'; // Send error response if data is missing
}
?>