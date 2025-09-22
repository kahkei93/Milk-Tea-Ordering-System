<?php
session_start();

// Database connection settings
$host = "localhost";
$user = "root";   // MySQL username
$pass = "";       // MySQL password
$dbname = "user"; // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['current_password']);

    if (empty($email) || empty($password)) {
        echo "<script>alert('⚠ Please enter both email and password.'); window.history.back();</script>";
        exit();
    }

    // Look up user by email
    $stmt = $conn->prepare("SELECT id, name, email, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $name, $db_email, $password_hash);
        $stmt->fetch();

        // ✅ Verify password (supports hashed passwords)
        if (password_verify($password, $password_hash)) {
            // ✅ Login successful → set session variables
            $_SESSION['user_id']    = $id;
            $_SESSION['user_name']  = $name;
            $_SESSION['user_email'] = $db_email;

            echo "<script>
                    alert('✅ Login successful! Redirecting...');
                    window.location.href = '../index.php';
                  </script>";
            exit();
        } else {
            echo "<script>alert('❌ Invalid password. Please try again.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('❌ No account found with that email. Please register first.'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
