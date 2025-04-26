<?php
// No session handling (vulnerable to session hijacking)

$db = new SQLite3('users.db');

// SQL Injection Vulnerability
$username = $_POST['username'];
$password = $_POST['password'];
$redirect = $_POST['redirect'] ?? 'dashboard.php';

// Insecure Password Storage: we store plain text passwords

// Vulnerable SQL Query (no sanitization)
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $db->query($query);

// XSS Vulnerability
echo "Hello, " . $username . "!<br>";

if ($row = $result->fetchArray()) {
    // Weak Authentication (no complexity check)
    echo "Login successful!<br>";

    // Open Redirect Vulnerability
    header("Location: $redirect");
    exit();
} else {
    echo "Invalid credentials.";
}
?>
