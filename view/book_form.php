<?php

$conn = mysqli_connect('localhost','dckap','Dckap2023Ecommerce','user_registration');

if (isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Validate and convert dates to MySQL format (YYYY-MM-DD)
    if (strtotime($arrivals)) {
        $arrivals = date('Y-m-d', strtotime($arrivals));
    } else {
        echo "Invalid date format for Arrivals.";
        exit; // Stop execution if date format is invalid
    }

    if (strtotime($leaving)) {
        $leaving = date('Y-m-d', strtotime($leaving));
    } else {
        echo "Invalid date format for Leaving.";
        exit; // Stop execution if date format is invalid
    }

    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    if ($stmt->execute()) {
        header('Location: ../view/book.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
