<?php 

$pdo = new PDO("sqlite:KJC.sqlite");

function query($sql) {
    global $pdo;
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInfo() {
    return query("SELECT * FROM website_info WHERE id=1");
}