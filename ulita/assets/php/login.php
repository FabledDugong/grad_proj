<?php
require_once "Control.php";
require_once "User.php";

if (isset($_POST["submitted-login"])) {
    $email = $control->testData($_POST["login-email"]);
    $password = $control->testPass($_POST["login-pass"]);

    $control->login($email, $password);
} else if (isset($_POST["submitted-registration"])) {
    $fname = $control->testData($_POST["registration-fname"]);
    $sname = $control->testData($_POST["registration-sname"]);
    $email = $control->testData($_POST["registration-email"]);
    $password = $control->testPass($_POST["registration-password"]);

    $control->createUser($fname, $sname, $email, $password);
} else if (isset($_POST["submitted-logout"])) {
    $control->logout();
}