<?php

require "database.php";

$header = "Welcome to Byte-A-Slice Pizza";
$cookieName = "auth";

$info = getInfo();

function html_dump($object)
{
    echo "<pre>";
    var_dump($object);
    echo "</pre>";
}

function login($username, $password)
{
    global $cookieName;
    $loginInfo = getLoginInfo();
    $hash = $loginInfo["password"];
    $userInfo = $loginInfo["username"];

    if (!password_verify($password, $hash) || $userInfo != $username) {
        return false;
    }

    setcookie($cookieName, md5($cookieName), time() + 60 * 60 * 24);

    return true;
}

function isLoggedIn()
{
    global $cookieName;
    return isset($_COOKIE[$cookieName]);
}
