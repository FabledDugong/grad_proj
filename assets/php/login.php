<?php

require_once "config.php";
require_once "control.php";

if(isset($_POST["loggedIn"])) {
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
        echo "<div class='alert failure loginFailAlert'>Špatné přihlašovací jméno nebo heslo.</div>";
    }
} else {
    if(isset($_POST["loggedOut"])) {
        $_SESSION["logged"] = false;
        $_SESSION["loggedOut"] = true;
        header("Location: admin.php?logged");
        exit();
    }
}