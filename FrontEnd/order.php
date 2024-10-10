<?php

require "include.php";
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
                <label for="pizza-size">Choose your pizza size:</label>
                <select id="pizza-size" name="pizza-size">
                    <option value="small" data-price="8">Small ($8)</option>
                    <option value="medium" data-price="10">Medium ($10)</option>
                    <option value="large" data-price="12">Large ($12)</option>
                </select>

                <label for="crust">Choose your crust:</label>
                <select id="crust" name="crust">
                    <option value="thin crust" data-price="2">Thin Crust ($2)</option>
                    <option value="stuffed crust" data-price="3">Stuffed Crust ($3)</option>
                    <option value="regular crust" data-price="1">Regular Crust ($1)</option>
                </select>

                <label for="toppings">Choose your toppings:</label>
                <input type="checkbox" id="pepperoni" name="toppings" value="pepperoni" data-price="1.5">
                <label for="pepperoni">Pepperoni ($1.5)</label>
                <input type="checkbox" id="mushrooms" name="toppings" value="mushrooms" data-price="1">
                <label for="mushrooms">Mushrooms ($1)</label>
                <input type="checkbox" id="sausage" name="toppings" value="sausage" data-price="1.5">
                <label for="sausage">Sausage ($1.5)</label>
                <input type="checkbox" id="olives" name="toppings" value="olives" data-price="1">
                <label for="olives">Olives ($1)</label>
                <input type="checkbox" id="jalapenos" name="toppings" value="jalapenos" data-price="1">
                <label for="jalapenos">Jalapenos ($1)</label>
                <input type="checkbox" id="bacon" name="toppings" value="bacon" data-price="2">
                <label for="bacon">Bacon ($2)</label>

                <h2>Total Price: $<span id="totalPrice">0</span></h2>
                <button type="button" id="orderNow">Order Now</button>
            </form>
        </section>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
