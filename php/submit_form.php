<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Check if name, email, or message is empty
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    // Further validation (optional)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email address."]);
        exit;
    }

    // Here you can add functionality to save the form data (e.g., to a database)
    echo json_encode(["status" => "success", "message" => "Thank you, $name. Your message has been sent."]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
