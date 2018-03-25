<?php

require_once "config.php";
require_once "control.php";

if(isset($_POST["submitted-login"])) {
    $username = testInput($_POST["username"]);
    $password = testPass($_POST["password"]);
    $password = hash("sha512", $password);

    $query = "SELECT * FROM user WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->execute(["username" => $username]);
    $result = $stmt->fetch();

    $isPresent = ($result == null)?"":$result->password;
    if($password == $isPresent) {
        $_SESSION["logged"] = true;
        $_SESSION["loggedIn"] = true;
        header("Location: admin.php?logged");
        exit();
    } else {
        $_SESSION["loginf"] = true;
        header("Location: admin.php?loginf");
        exit();
    }
} else {
    if(isset($_POST["submitted-logout"])) {
        $_SESSION["logged"] = false;
        $_SESSION["loggedOut"] = true;
        header("Location: admin.php");
        exit();
    }
}