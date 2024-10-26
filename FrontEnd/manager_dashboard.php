<?php
require "include.php";

if (!isLoggedIn()) {
    header("Location: /");
    exit();
}

$sizes = getSizes();
$crusts = getCrusts();
$toppings = getToppings();
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
    <main id="main-manager-dashboard">
        <div id="md-container">
            <form action="update_database.php" method="POST">

                <div>
                    <label>Website Info Table</label>
                    <br>
                    <table>
                        <tr>
                            <th>About</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Promotion</th>
                            <th></th>
                        </tr>
                        <?php foreach ($info as $row => $data): ?>
                            <tr>
                                <td><?= $data["about"] ?></td>
                                <td><?= $data["location"] ?></td>
                                <td><?= $data["phone"] ?></td>
                                <td><?= $data["email"] ?></td>
                                <td><?= $data["promotion"] ?></td>
                                <td>
                                    <a href="/md_edit.php?table=info&id=<?= $data["id"] ?>">edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <div>
                    <label>Pizza Sizes Table</label>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th><a href="/md_add.php?table=sizes">add</a></th>
                        </tr>
                        <?php foreach ($sizes as $row => $data): ?>
                            <tr>
                                <td><?= $data["name"] ?></td>
                                <td><?= $data["price"] ?></td>
                                <td>
                                    <a href="/md_edit.php?table=sizes&id=<?= $data["id"] ?>">edit</a>
                                    <a href="/md_delete.php?table=sizes&id=<?= $data["id"] ?>">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    </table>
                </div>

                <div>
                    <label>Pizza Crusts Table</label>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th><a href="/md_add.php?table=crusts">add</a></th>
                        </tr>
                        <?php foreach ($crusts as $row => $data): ?>
                            <tr>
                                <td><?= $data["name"] ?></td>
                                <td><?= $data["price"] ?></td>
                                <td>
                                    <a href="/md_edit.php?table=crusts&id=<?= $data["id"] ?>">edit</a>
                                    <a href="/md_delete.php?table=crusts&id=<?= $data["id"] ?>">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <div>
                    <label>Pizza Toppings Table</label>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th><a href="/md_add.php?table=toppings">add</a></th>
                        </tr>
                        <?php foreach ($toppings as $row => $data): ?>
                            <tr>
                                <td><?= $data["name"] ?></td>
                                <td><?= $data["price"] ?></td>
                                <td><?= $data["category"] ?></td>
                                <td>
                                    <a href="/md_edit.php?table=toppings&id=<?= $data["id"] ?>">edit</a>
                                    <a href="/md_delete.php?table=toppings&id=<?= $data["id"] ?>">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
