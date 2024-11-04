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
    <main id="main-manager-dashboard-edit">

        <form action="md_handler.php" method="POST">
            <?php if ($table == "toppings"): ?>
                <label>Edit the topping</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="edit">
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
                <label>Edit the crust</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="edit">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $crust["name"] ?>">Name:</label>
                <input type="text" id="<?= $crust["name"] ?>" name="name" value="<?= $crust["name"] ?>">
                <br>
                <label for="<?= $crust["price"] ?>">Price:</label>
                <input type="text" id="<?= $crust["price"] ?>" name="price" value="<?= $crust["price"] ?>">
            <?php elseif ($table == "sizes"): ?>
                <label>Edit the size</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="edit">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $size["name"] ?>">Name:</label>
                <input type="text" id="<?= $size["name"] ?>" name="name" value="<?= $size["name"] ?>">
                <br>
                <label for="<?= $size["price"] ?>">Price:</label>
                <input type="text" id="<?= $size["price"] ?>" name="price" value="<?= $size["price"] ?>">
            <?php elseif ($table == "info"): ?>
                <label>Edit the info</label>
                <br>
                <br>
                <input type="hidden" name="operation" value="edit">
                <input type="hidden" name="table" value="<?= $table ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="<?= $info[0]["about"] ?>">About:</label>
                <input type="text" id="<?= $info[0]["about"] ?>" name="about" value="<?= $info[0]["about"] ?>">
                <br>
                <label for="<?= $info[0]["location"] ?>">Location:</label>
                <input type="text" id="<?= $info[0]["location"] ?>" name="location" value="<?= $info[0]["location"] ?>">
                <br>
                <label for="<?= $info[0]["phone"] ?>">Phone:</label>
                <input type="text" id="<?= $info[0]["phone"] ?>" name="phone" value="<?= $info[0]["phone"] ?>">
                <br>
                <label for="<?= $info[0]["email"] ?>">Email:</label>
                <input type="text" id="<?= $info[0]["email"] ?>" name="email" value="<?= $info[0]["email"] ?>">
                <br>
                <label for="<?= $info[0]["promotion"] ?>">Promotion:</label>
                <input type="text" id="<?= $info[0]["promotion"] ?>" name="promotion" value="<?= $info[0]["promotion"] ?>">
            <?php endif; ?>
            <br>
            <button type="submit">Save</button>
        </form>

    </main>
</body>

</html>