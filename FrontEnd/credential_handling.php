<?php
require "include.php";


$username = filter_input(INPUT_POST, "username", FILTER_DEFAULT);
$password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);

if (login($username, $password)) {
    header("Location: /manager_dashboard.php");
    exit();
} else {
    header("Location: /login.php");
    exit();
}
