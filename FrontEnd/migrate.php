<?php
// migrate.php

require 'database.php'; // Include the existing database connection

// Function to run the SQL file to create the orders table
function runMigration($file) {
    global $pdo;

    // Get the SQL commands from the file
    $sql = file_get_contents($file);

    // Execute the SQL commands
    try {
        $pdo->exec($sql);
        echo "Migration successfully executed: Orders table created.";
    } catch (PDOException $e) {
        echo "Error executing migration: " . $e->getMessage();
    }
}

// Run the migration to create the orders table
runMigration('create_orders_table.sql');
?>
