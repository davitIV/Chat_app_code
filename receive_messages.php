<?php
$jsonData = file_get_contents('php://input');

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


if (!empty($jsonData)) {
    $data = json_decode($jsonData, true);
	$logged_email = $data['email'];

	// Retrieve chat messages from the database
	$selectMessages = "SELECT sender, receiver, text, created_at FROM chat_ 
	WHERE sender='$logged_email' OR receiver='$logged_email'  
	ORDER BY created_at DESC";
	$result = $conn->query($selectMessages);

	if ($result) {
		$messages = array();

		while ($row = $result->fetch_assoc()) {
			$message = array(
				"sender" => $row["sender"],
				"receiver" => $row["receiver"],
				"text" => $row["text"],
				"date" => $row["created_at"]
			);

			$messages[] = $message;
		}

		echo json_encode($messages);
	} else {
		$response = array("success" => false, "message" => "Error retrieving messages from the database");
		echo json_encode($response);
	}
}
$conn->close();

?>