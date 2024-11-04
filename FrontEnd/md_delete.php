<?php

require "include.php";

$table = filter_input(INPUT_GET, "table", FILTER_DEFAULT);
$id = filter_input(INPUT_GET, "id", FILTER_DEFAULT);



if (empty($table) || empty($id) || intval($id) == 0) {
    header("Location: /manager_dashboard.php");
    exit();
}

if ($table == "toppings") {
    $topping = getTopping($id);
} else if ($table == "crusts") {
    $crust = getCrust($id);
} else if ($table == "sizes") {
    $size = getSize($id);
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <h1><?= $header ?></h1>
    </header>
    <nav>
        <div>
            <ul>
                <li><a class="currentPage" href="index.php">Home</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>
        </div>
    </nav>
    <main id="main-manager-dashboard-delete">

        <form action="md_handler.php" method="POST">
            <?php if ($table == "toppings"): ?>
                <label>Delete the topping</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="delete">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $topping["name"] ?>">Name:</label>
                <input type="text" id="<?= $topping["name"] ?>" name="name" value="<?= $topping["name"] ?>">
                <br>
                <label for="<?= $topping["price"] ?>">Price:</label>
                <input type="text" id="<?= $topping["price"] ?>" name="price" value="<?= $topping["price"] ?>">
                <br>
                <label for="<?= $topping["category"] ?>">Category:</label>
                <input type="text" id="<?= $topping["category"] ?>" name="category" value="<?= $topping["category"] ?>">
            <?php elseif ($table == "crusts"): ?>
                <label>Delete the crust</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="delete">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $crust["name"] ?>">Name:</label>
                <input type="text" id="<?= $crust["name"] ?>" name="name" value="<?= $crust["name"] ?>">
                <br>
                <label for="<?= $crust["price"] ?>">Price:</label>
                <input type="text" id="<?= $crust["price"] ?>" name="price" value="<?= $crust["price"] ?>">
            <?php elseif ($table == "sizes"): ?>
                <label>Delete the size</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="delete">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $size["name"] ?>">Name:</label>
                <input type="text" id="<?= $size["name"] ?>" name="name" value="<?= $size["name"] ?>">
                <br>
                <label for="<?= $size["price"] ?>">Price:</label>
                <input type="text" id="<?= $size["price"] ?>" name="price" value="<?= $size["price"] ?>">
            <?php endif; ?>
            <button type="submit">Delete</button>
        </form>

    </main>
</body>

</html>