<?php
function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function testPass($pass) {
    $pass = trim($pass);
    $pass = preg_replace("/\s+/", "", $pass);
    $pass = htmlspecialchars($pass);
    return $pass;
}