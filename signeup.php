<?php
// Retrieve JSON data sent from the Qt application
$jsonData = file_get_contents('php://input');

if (!empty($jsonData)) {
    $data = json_decode($jsonData, true);

    $firstName = $data['First Name'];
    $lastName = $data['Last Name'];
    $email = $data['Email'];
    $password = $data['Password'];

    // Sample database connection (replace with your actual credentials)
    $servername = "localhost";
    $username = "u856357678_data";
    $dbPassword = "gfdr#456-fS@q";
    $dbname = "u856357678_data";

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email already exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Email already exists. Cannot add duplicate entry.";
    } else {
        // Prepare and execute SQL INSERT statement
        $insertQuery = "INSERT INTO users (first_name, last_name, email, Password) VALUES ('$firstName', '$lastName', '$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    $conn->close(); // Close the database connection
} else {
    echo "No data received";
}
?>
