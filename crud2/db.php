<?php
try {
    
    $conn = new PDO("mysql:host=localhost;dbname=mydb1", "root", "");
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    
    error_log("Database connection failed: " . $e->getMessage());

    echo "Database connection failed. Please check your configuration.";
    exit;
}
?>