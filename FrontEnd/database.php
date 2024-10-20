<?php 

$pdo = new PDO("sqlite:Byte-A-Slice_Pizza.sqlite");

// $sql is a sql query and $parameters is an array.
function query($sql, $parameters = null) {
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($parameters);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInfo() {
    return query("SELECT * FROM website_info WHERE id=?" , [1]);
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

function insertOrderInfo($firstName, $lastName, $address, $pizzaSize, $pizzaCrust, $pizzaToppings, $totalPrice) {
    $sql = "INSERT INTO order_info (first_name, last_name, address, pizza_size, pizza_crust, pizza_toppings, total_price) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $parameters = [$firstName, $lastName, $address, $pizzaSize, $pizzaCrust, $pizzaToppings, $totalPrice];
    return query($sql, $parameters);
}