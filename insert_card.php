<?php
include('config.php');

if(isset($_POST['confirm'])){
    $product_ID = $_POST['product_ID'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $product_name = $_POST['product_name'];

    // Prepare the INSERT statement
    $INSERT = "INSERT INTO cart (product_ID, quantity, price, product_name) VALUES (?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($config, $INSERT);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "iids", $product_ID, $quantity, $price, $product_name);

    // Execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        header('location:cart.php'); // Redirect to the cart page
    } else {
        echo "Error: " . mysqli_error($config);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
