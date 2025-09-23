<?php

// Database connection settings
$host = "localhost";   // usually localhost
$user = "root";        // MySQL username
$pass = "";            // MySQL password
$dbname = "user";      // your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name     = trim($_POST['name']);
    $mobile   = trim($_POST['mobile']);
    $email    = trim($_POST['email']);
    $address  = trim($_POST['address']);
    $password = $_POST['current_password'];
    $confirm  = $_POST['new_password'];

    // Basic validation
    if (empty($name) || empty($mobile) || empty($email) || empty($address) || empty($password) || empty($confirm)) {
        die("⚠ All fields are required.");
    }

    if ($password !== $confirm) {
        die("⚠ Passwords do not match.");
    }

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if (!$check) {
        die("Prepare failed: " . $conn->error);
    }
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        die("⚠ An account with this email already exists. Please log in instead.");
    }
    $check->close();

    // Hash password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database (phone as string)
    $stmt = $conn->prepare("INSERT INTO users (name, email, password_hash, address, phone) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $name, $email, $password_hash, $address, $mobile);

    if ($stmt->execute()) {
        // Redirect safely after registration
        $stmt->close();
        $conn->close();
        header("Location: ../login/index.php");
        exit;
    } else {
        die("❌ Error: " . $stmt->error);
    }
}

$conn->close();
?>
