<?php

require "include.php";


$sizes = getSizes();
$crusts = getCrusts();
$toppings = getToppings();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Ordering System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1><?= $header ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="currentPage" href="order.php">Order</a></li>
        </ul>
    </nav>
    <main>
        <div id="promotioncontainer">
            <div id="promotion">
                <div id="promotion-text">
                    Bacon Pizza 50% off !!
                </div>
            </div>
        </div>
        <section id="order-form">
            <h2>Order Your Pizza</h2>
            <form id="pizzaForm" action="order_summary.php" method="POST">
                <div>
                    <label for="pizza-size">Choose your Pizza Size:</label>
                    <select id="pizza-size" name="pizza-size">
                        <?php foreach ($sizes as $size): ?>
                            <option value="<?= $size["name"] ?>" data-price="<?= $size["price"] ?>"><?= $size["name"] ?> $<?= $size["price"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="crust">Choose your Crust:</label>
                    <select id="crust" name="crust">
                        <?php foreach ($crusts as $crust): ?>
                            <option value="<?= $crust["name"] ?>" data-price="<?= $crust["price"] ?>"><?= $crust["name"] ?> $<?= $crust["price"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label>Choose your Meats:</label>
                    <?php foreach ($toppings as $topping): ?>
                        <?php if ($topping["category"] == "meat"): ?>
                            <input type="checkbox" id="<?= $topping["name"] ?>" name="toppings[]" value="<?= $topping["name"] ?>" data-price="<?= $topping["price"] ?>">
                            <label for="<?= $topping["name"] ?>"><?= $topping["name"] ?> $<?= $topping["price"] ?></label>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div>
                    <label>Choose your Veggies:</label>
                    <?php foreach ($toppings as $topping): ?>
                        <?php if ($topping["category"] == "vegetable"): ?>
                            <input type="checkbox" id="<?= $topping["name"] ?>" name="toppings[]" value="<?= $topping["name"] ?>" data-price="<?= $topping["price"] ?>">
                            <label for="<?= $topping["name"] ?>"><?= $topping["name"] ?> $<?= $topping["price"] ?></label>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <label>Total Price :</label>
                <input type="text" id="total-price" name="total-price" readonly>

                <div>
                    <h3> Enter information below.</h3>
                    <label>First Name :</label>
                    <input type="text" id="first-name" name="first-name" required> <br>
                    <br>
                    <label>Last Name :</label>
                    <input type="text" id="last-name" name="last-name" required> <br>
                    <br>
                    <label>Address :</label>
                    <input type="text" id="address" name="address" required> <br>
                </div>

                <div>
                    <h3> Enter card information below.</h3>
                    <label>Card Number :</label>
                    <input name="card-number" required> <br>
                    <br>
                    <label>Expiration Date :</label>
                    <input name="expiration" required> <br>
                    <br>
                    <label>CVV :</label>
                    <input name="cvv" required> <br>
                    <br>
                    <label>Cardholder's Name :</label>
                    <input name="cardholders-name" required> <br>
                    <br>
                    <label>Billing Address :</label>
                    <input name="billing-address" required> <br>
                    <br>
                    <button type="submit">Order Now</button>
                </div>
            </form>
        </section>
    </main>
    <script src="scripts.js"></script>
</body>

</html>