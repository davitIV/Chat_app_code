<?php

// Sample database connection (replace with your actual credentials)
$servername = "+";
$username = "+";
$password = "+";
$dbname = "+";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

$sender = $data['email']; // Use the logged-in user's email as the sender
$receiver = $data['receiver'];
$text = $data['text'];

// Check if the receiver email exists
$checkEmailQuery = "SELECT COUNT(*) as count FROM users WHERE email = ?";
$stmtCheckEmail = $conn->prepare($checkEmailQuery);
$stmtCheckEmail->bind_param("s", $receiver);
$stmtCheckEmail->execute();
$stmtCheckEmail->bind_result($emailCount);
$stmtCheckEmail->fetch();
$stmtCheckEmail->close();

if ($emailCount > 0) {
    // Receiver email exists, proceed to insert the message
    $insertMessage = "INSERT INTO chat_ (sender, receiver, text) VALUES (?, ?, ?)";

    $stmtInsert = $conn->prepare($insertMessage);
    $stmtInsert->bind_param("sss", $sender, $receiver, $text);

    if ($stmtInsert->execute()) {
        $response = array("success" => true, "message" => "Message sent successfully!");
    } else {
        $response = array("success" => false, "message" => "Error: " . $stmtInsert->error);
    }

    $stmtInsert->close();
} else {
    // Receiver email does not exist
    $response = array("success" => false, "message" => "Receiver email does not exist. Message not sent.");
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);

?>
