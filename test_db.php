<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=se_admin', 'root', '');
    echo "Connected successfully\n";
    
    // Test query
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    if (empty($tables)) {
        echo "No tables found\n";
    } else {
        echo "Tables found: " . implode(', ', $tables) . "\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
?>