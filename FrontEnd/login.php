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
        <h1><?= $header ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a class="currentPage" href="login.php">Log In</a></li>
        </ul>
    </nav>
    <main>
        <form action="credential_handling.php" method="POST">
            <div id="login-container">
                <label for="username"><b>Username: </b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br>
                <label for="password"><b>Password: </b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <button type="submit">Login</button>
            </div>
        </form>
    </main>
</body>

</html>