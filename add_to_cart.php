<?php
session_start();
include '../db_connect.php'; // Ensure the correct path

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

    if ($product_id > 0) {
        // Fetch product details from the database
        $stmt = $conn->prepare("SELECT product_name, product_price FROM products WHERE product_id = ?");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
            $product_name = $product['product_name'];
            $product_price = $product['product_price'];

            // Initialize the cart if not already
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // Add or update the cart
            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id]['quantity'] += 1;
            } else {
                $_SESSION['cart'][$product_id] = array(
                    'name' => $product_name,
                    'price' => $product_price,
                    'quantity' => 1
                );
            }

            echo 'Product added to cart.';
        } else {
            echo 'Product not found.';
        }

        $stmt->close();
    } else {
        echo 'Invalid product ID.';
    }

    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>
