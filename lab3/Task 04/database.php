<?php
$host = "localhost";
$dbname = "library";
$username = "root";  // Default XAMPP username yei ho
$password = "";      // Default XAMPP MySQL password chai always empty hunxa

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
