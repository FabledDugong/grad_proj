<?php

require_once "config.php";
require_once "control.php";

if (isset($_POST["submittedMail"])) {
    $errors = array();

    $senderName = testInput($_POST["name"]);
    $senderMail = testInput($_POST["mail"]);
    $senderSubject = testInput($_POST["subject"]);
    $senderMessage = testInput($_POST["message"]);
    $receiver = "mzouhar3@gmail.com";

    if (empty($senderName))

    if (empty($errors)) {
        $_SESSION["sent"] = true;
        mail($receiver, $senderSubject, $senderMessage, "From: " . $senderMail, null);
        header("Location: index.php?sent");
        exit();
    }
/*
    try {
        if (empty($senderName) === true || empty($senderMail) === true || empty($senderSubject) === true || empty($senderMessage) === true) {
            throw new Exception("Required fields are empty.");
        } else if (filter_var($senderMail, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception("That's not a valid email.");
        } else if (ctype_alpha($senderName) === false) {
            throw new Exception("Name must only contain letters.");
        } else if (strlen($senderMessage) >= 500) {
            throw new Exception("Your message is too long. Make it more brief.");
        }

    } catch (Exception $e) {
        $errors[] = $e->getMessage();
        if($errors === "That's not a valid email.") {

        }
    }
    */
}
