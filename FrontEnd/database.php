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

function getSizes() {
    return query("SELECT * FROM pizza_sizes");
}

function getCrusts() {
    return query("SELECT * FROM pizza_crusts");
}

function getToppings() {
    return query("SELECT * FROM pizza_toppings");
}