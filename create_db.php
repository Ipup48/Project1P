<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1', 'root', '');
    $pdo->exec('CREATE DATABASE IF NOT EXISTS se_admin');
    echo 'Database created successfully';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}