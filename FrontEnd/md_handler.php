<?php

require "include.php";
$table = filter_input(INPUT_POST, "table", FILTER_DEFAULT);
$operation = filter_input(INPUT_POST, "operation", FILTER_DEFAULT);

if ($table == "toppings" & $operation == "edit") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    editTopping($name, $price, $id);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "crusts" & $operation == "edit") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    editCrust($name, $price, $id);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "sizes" & $operation == "edit") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    editSize($name, $price, $id);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "info" & $operation == "edit") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    $about = filter_input(INPUT_POST, "about", FILTER_DEFAULT);
    $location = filter_input(INPUT_POST, "location", FILTER_DEFAULT);
    $phone = filter_input(INPUT_POST, "phone", FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
    $promotion = filter_input(INPUT_POST, "promotion", FILTER_DEFAULT);
    editInfo($id, $about, $location, $phone, $email, $promotion);
    header("Location: /manager_dashboard.php");
    exit();
}

if ($table == "toppings" & $operation == "add") {
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    $category = filter_input(INPUT_POST, "category", FILTER_DEFAULT);
    addTopping($name, $price, $category);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "crusts" & $operation == "add") {
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    addCrust($name, $price);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "sizes" & $operation == "add") {
    $name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
    $price = filter_input(INPUT_POST, "price", FILTER_DEFAULT);
    addSize($name, $price);
    header("Location: /manager_dashboard.php");
    exit();
}

if ($table == "toppings" & $operation == "delete") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    deleteTopping($id);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "crusts" & $operation == "delete") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    deleteCrust($id);
    header("Location: /manager_dashboard.php");
    exit();
} else if ($table == "sizes" & $operation == "delete") {
    $id = filter_input(INPUT_POST, "id", FILTER_DEFAULT);
    deleteSize($id);
    header("Location: /manager_dashboard.php");
    exit();
}
