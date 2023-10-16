<?php
include("config.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

function getNextProductId($config) {
    $query = "SELECT MAX(product_ID) as max_id FROM products";
    $result = mysqli_query($config, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['max_id'] + 1;
}

function uploadProduct($product_ID, $name, $description, $price, $quantity, $image_tmp, $image_name) {
    global $config;

    $image_up = "images/" . $image_name;

    if (move_uploaded_file($image_tmp, 'images/' . $image_name)) {
        $query = "INSERT INTO products(product_ID, product_name, description, price, image, quantity) VALUES('$product_ID', '$name', '$description', '$price', '$image_up', '$quantity')";
        if (mysqli_query($config, $query)) {
            return true; // Upload and database insert successful
        } else {
            echo "Database insert failed for product: $name - " . mysqli_error($config);
        }
    } else {
        echo "Image upload failed for product: $name";
    }

    return false; // Upload or database insert failed
}

if (isset($_POST["upload"])) {
    $product_names = $_POST['product_name'];
    $descriptions = $_POST['description'];
    $prices = $_POST['price'];
    $images = $_FILES['image'];
    $quantities = $_POST['quantity'];

    $successCount = 0;

    for ($i = 0; $i < count($product_names); $i++) {
        $name = $product_names[$i];
        $description = $descriptions[$i];
        $price = $prices[$i];
        $quantity = $quantities[$i];
        $image_tmp = $images['tmp_name'][$i];
        $image_name = $images['name'][$i];

        $nextProductId = getNextProductId($config);

        if (uploadProduct($nextProductId, $name, $description, $price, $quantity, $image_tmp, $image_name)) {
            $successCount++;
        }
    }

    mysqli_close($config);

    if ($successCount > 0) {
        echo "<script>alert('Upload Done for $successCount product(s)')</script>";
        echo "<script>location.replace('products.php')</script>";
    } else {
        echo "<script>alert('Upload Not Done')</script>";
        echo "<script>location.replace('productedit.html')</script>";
    }
}
?>
