<?php
mb_internal_encoding("UTF-8");

session_start();

$host = "localhost"; //define("HOST", "localhost");
$user = "root"; //define("USER", "root");
$pass = "De39dbfa;"; //define("PASS", "");
$db = "vaspsychiatr"; //define("DB", "user");
$dsn = "mysql:host=localhost;dbname=vaspsychiatr;"; //define("DSN", "mysql:host=localhost;db=user;charset=utf;");

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}