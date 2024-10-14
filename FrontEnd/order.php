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
        <h1><?=$header?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="currentPage" href="order.php">Order</a></li>
            <li><a href="login.php">Log In</a></li>
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
            <form id="pizzaForm">
                <div>
                <label for="pizza-size">Choose your Pizza Size:</label>
                <select id="pizza-size">
                <?php foreach ($sizes as $size): ?>
                <option data-name="<?=$size["name"]?>"data-price="<?=$size["price"]?>"><?=$size["name"]?> $<?=$size["price"]?></option>
                <?php endforeach; ?>
                </select>
                </div>

                <div>
                <label for="crust">Choose your Crust:</label>
                <select id="crust">
                <?php foreach ($crusts as $crust): ?>
                <option data-price="<?=$crust["price"]?>"><?=$crust["name"]?> $<?=$crust["price"]?></option>
                <?php endforeach; ?>
                </select>
                </div>

                <div>
                <label>Choose your Meats:</label>
                <?php foreach ($toppings as $topping): ?>
                    <?php if ($topping["category"] == "meat"): ?>
                    <input type="checkbox" id="<?=$topping["name"]?>" name="toppings" value="<?=$topping["name"]?>" data-price="<?=$topping["price"]?>">
                    <label for="<?=$topping["name"]?>"><?=$topping["name"]?> $<?=$topping["price"]?></label>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>

                <div>
                <label>Choose your Veggies:</label>
                <?php foreach ($toppings as $topping): ?>
                    <?php if ($topping["category"] == "vegetable"): ?>
                    <input type="checkbox" id="<?=$topping["name"]?>" name="toppings" value="<?=$topping["name"]?>" data-price="<?=$topping["price"]?>">
                    <label for="<?=$topping["name"]?>"><?=$topping["name"]?> $<?=$topping["price"]?></label>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>
                
                <h2>Total Price: $<span id="totalPrice">0</span></h2>
                
            </form>
        </section>
        <div>   
            <h3> Enter information below.</h3>
            <label>First Name :</label>
            <input type="text" id="first_name"> <br>
            <br>
            <label>Last Name :</label>
            <input type="text" id="last_name"> <br>
            <br>
            <label>Address :</label>
            <input type="text" id="address"> <br>
        </div>
        <div>
            <h3> Enter card information below.</h3>
            <label>Card Number :</label>
            <input> <br>
            <br>
            <label>Expiration Date :</label>
            <input> <br>
            <br>
            <label>CVV :</label>
            <input> <br>
            <br>
            <label>Cardholder's Name :</label>
            <input> <br>
            <br>
            <label>Billing Address :</label>
            <input> <br>
            <br>
            <button type="button" id="orderNow">Order Now</button>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
