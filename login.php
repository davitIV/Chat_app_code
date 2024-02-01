<?php

// Sample database connection (replace with your actual credentials)
$servername = "localhost";
$username = "u856357678_data";
$password = "gfdr#456-fS@q";
$dbname = "u856357678_data";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve JSON data sent from the Qt application
$jsonData = file_get_contents('php://input');

if (!empty($jsonData)) {
    $data = json_decode($jsonData, true);

    $email = $data['email'];
    $password = $data['password'];

    // TODO: Implement secure practices such as hashing passwords and preventing SQL injection
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, login successful
        $_SESSION['user_email'] = $email; // Store user email in the session
        $response = array("success" => true, "message" => "Login successful", "user_email" => $email);
    } else {
        // User not found or incorrect credentials
        $response = array("success" => false, "message" => "Invalid credentials");
    }

    // Send JSON response back to the Qt application
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo "No data received";
}

$conn->close(); // Close the database connection
?>
