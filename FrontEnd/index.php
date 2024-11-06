<?php

require "include.php";



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
            </ul>
        </div>
    </nav>
    <main>
        <div id="promotioncontainer">
            <div id="promotion">
                <div id="promotion-text">
                    <?= $info[0]["promotion"] ?>
                </div>
            </div>
        </div>
        <div id="image">
            <img src="img\pizza.webp" alt="Pizza Pictures" width="1400" height="400">
        </div>
        <div id="aboutuscontainer">
            <div id="aboutus">
                <h1>About Us</h1>
                <p><?= nl2br($info[0]["about"]) ?></p>
                <h1>Contact Us</h1>
                <p>Location: <?= $info[0]["location"] ?><br />
                    Phone: <?= $info[0]["phone"] ?><br />
                    Email: <?= $info[0]["email"] ?></p>
            </div>
    </main>
    <script src="scripts.js"></script>
</body>

</html>