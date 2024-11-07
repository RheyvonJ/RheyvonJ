<?php
$host = 'localhost';     // Database host (usually localhost)
$db = 'database_test'; // Name of the database we created
$user = 'root';          // Your database username (e.g., root)
$pass = '';              // Your database password

try {
    // Connect to the database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Set error mode to exception for error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Output error if connection fails
    die("Database connection failed: " . $e->getMessage());
}
?>
