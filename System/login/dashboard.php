<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: main.php");
    exit;
}

echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
echo "<br><a href='logout.php'>Logout</a>";
?>
