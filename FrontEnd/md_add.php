<?php

require "include.php";

$table = filter_input(INPUT_GET, "table", FILTER_DEFAULT);



if (empty($table)) {
    header("Location: /manager_dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles_md.css">

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
                <label>Add a topping</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="add">
                <input type="hidden" name="table" value="<?= $table ?>">
                <label>Name:</label>
                <input type="text"  name="name">
                <br>
                <label>Price:</label>
                <input type="text" name="price">
                <br>
                <label>Category:</label>
                <input type="text" name="category">
            <?php elseif ($table == "crusts"): ?>
                <label>Add a crust</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="add">
                <input type="hidden" name="table" value="<?= $table ?>">
                <label>Name:</label>
                <input type="text"  name="name">
                <br>
                <label>Price:</label>
                <input type="text" name="price">
            <?php elseif ($table == "sizes"): ?>
                <label>Add a size</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="add">
                <input type="hidden" name="table" value="<?= $table ?>">
                <label>Name:</label>
                <input type="text"  name="name">
                <br>
                <label>Price:</label>
                <input type="text" name="price">
            <?php endif; ?>
            <button type="submit">Add</button>
        </form>

    </main>
</body>

</html>