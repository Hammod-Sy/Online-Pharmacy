<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Assuming you have a database connection named $conn
    $sql = "INSERT INTO order_items (full_name, address, phone_number, email) VALUES (?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = $config->prepare($sql);
    $stmt->bind_param("ssss", $name, $address, $phone, $email);

    if ($stmt->execute()) {
        $stmt->close();
        $config->close();

        echo "<script>alert('Thank you for your time, your Order is in progress')</script>";
        echo "<script>window.location.href = 'Home3.html';</script>";
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
    $config->close();
}
?>
