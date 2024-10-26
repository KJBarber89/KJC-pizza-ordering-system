<?php

$pdo = new PDO("sqlite:Byte-A-Slice_Pizza.sqlite");

// $sql is a sql query and $parameters is an array.
function query($sql, $parameters = null)
{
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($parameters);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInfo()
{
    return query("SELECT * FROM website_info WHERE id=?", [1]);
}

function editInfo($id, $about, $location, $phone, $email, $promotion)
{
    $sql = "UPDATE website_info SET about=?, location=?, phone=?, email=?, promotion=? WHERE id=?";
    $parameters = [$about, $location, $phone, $email, $promotion, $id];
    return query($sql, $parameters);
}

function getSizes()
{
    return query("SELECT * FROM pizza_sizes");
}

function getSize($id)
{
    $data = query("SELECT * FROM pizza_sizes WHERE id=?", [$id]);
    return $data[0];
}

function deleteSize($id)
{
    $data = query("DELETE FROM pizza_sizes WHERE id=?", [$id]);
    return $data;
}

function addSize($name, $price)
{
    $sql = "INSERT INTO pizza_sizes (name, price) VALUES(?,?)";
    $parameters = [$name, $price];
    return query($sql, $parameters);
}

function editSize($name, $price, $id)
{
    $sql = "UPDATE pizza_sizes SET name=?, price=? WHERE id=?";
    $parameters = [$name, $price, $id];
    return query($sql, $parameters);
}

function getCrusts()
{
    return query("SELECT * FROM pizza_crusts");
}

function getCrust($id)
{
    $data = query("SELECT * FROM pizza_crusts WHERE id=?", [$id]);
    return $data[0];
}

function deleteCrust($id)
{
    $data = query("DELETE FROM pizza_crusts WHERE id=?", [$id]);
    return $data;
}

function addCrust($name, $price)
{
    $sql = "INSERT INTO pizza_crusts (name, price) VALUES(?,?)";
    $parameters = [$name, $price];
    return query($sql, $parameters);
}

function editCrust($name, $price, $id)
{
    $sql = "UPDATE pizza_crusts SET name=?, price=? WHERE id=?";
    $parameters = [$name, $price, $id];
    return query($sql, $parameters);
}

function getToppings()
{
    return query("SELECT * FROM pizza_toppings");
}

function getTopping($id)
{
    $data = query("SELECT * FROM pizza_toppings WHERE id=?", [$id]);
    return $data[0];
}

function deleteTopping($id)
{
    $data = query("DELETE FROM pizza_toppings WHERE id=?", [$id]);
    return $data;
}

function addTopping($name, $price, $category)
{
    $sql = "INSERT INTO pizza_toppings ( name, price, category) VALUES(?,?,?)";
    $parameters = [$name, $price, $category];
    return query($sql, $parameters);
}

function editTopping($name, $price, $id)
{
    $sql = "UPDATE pizza_toppings SET name=?, price=? WHERE id=?";
    $parameters = [$name, $price, $id];
    return query($sql, $parameters);
}

function getLoginInfo()
{
    $data = query("SELECT * FROM admin_info WHERE id=?", [1]);
    return $data[0];
}

function insertOrderInfo($firstName, $lastName, $address, $pizzaSize, $pizzaCrust, $pizzaToppings, $totalPrice)
{
    $sql = "INSERT INTO order_info (first_name, last_name, address, pizza_size, pizza_crust, pizza_toppings, total_price) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $parameters = [$firstName, $lastName, $address, $pizzaSize, $pizzaCrust, $pizzaToppings, $totalPrice];
    return query($sql, $parameters);
}
