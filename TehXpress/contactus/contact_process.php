<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "user";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = trim($_POST['firstName']);
    $lastName  = trim($_POST['lastName']);
    $email     = trim($_POST['email']);
    $phone     = trim($_POST['phone']);
    $message   = trim($_POST['message']);

    // Basic validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($message)) {
        die("⚠ Please fill in all fields!");
    }

    $sql = "INSERT INTO contact_messages (first_name, last_name, email, phone, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $firstName, $lastName, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>
                alert('✅ Thank you! Your message has been submitted.');
                window.location.href = 'index.php';
              </script>";
    } else {
        die("Execute failed: " . $stmt->error);
    }

    $stmt->close();
}
$conn->close();
?>
