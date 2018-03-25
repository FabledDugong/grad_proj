<?php

require_once "config.php";
require_once "control.php";

if (isset($_POST["submitted-mail"])) {
    $senderName = testInput($_POST["name"]);
    $senderMail = testInput($_POST["mail"]);
    $senderSubject = testInput($_POST["subject"]);
    $senderMessage = testInput($_POST["message"]);

    $errors = array();
    $empty = array();

    $textRx = "/^[a-zA-Z]{1}[a-zA-Z\s]+\z/";

    if (empty($senderName)) {
        $empty[] = 150011;
    }
    if (empty($senderMail)) {
        $empty[] = 150012;
    }
    if (empty($senderSubject)) {
        $empty[] = 150013;
    }
    if (empty($senderMessage)) {
        $empty[] = 150014;
    }
    try {
        if (!preg_match($textRx, $senderName)) {
            throw new Exception("Jméno musí obsahovat pouze písmena.", 15002);
        }
    } catch (Exception $ex) {
        $errors[] = $ex->getCode();
    }
    try {
        if (!filter_var($senderMail, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Zadaný email není validní.", 15003);
        }
    } catch (Exception $ex) {
        $errors[] = $ex->getCode();
    }
    try {
        if (strlen($senderMessage) > 500) {
            throw new Exception("Vaše zpráva je moc dlouhá.", 15004);
        }
    } catch (Exception $ex) {
        $errors[] = $ex->getCode();
    }

    $receiver = "mzouhar3@gmail.com";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8;" . "\r\n";
    $headers .= "From: " . $senderMail . "\r\n";
    $headers .= "Reply-To: " . $senderMail . "\r\n";

    if (empty($errors)) {
        $_SESSION["sent"] = true;
        mail($receiver, $senderSubject, $senderMessage, $headers, "From: " . $senderMail);
        header("Location: index.php?sent/");
        exit();
    } else {
        $_SESSION["sentf"] = true;
        $_SESSION["errors"] = $errors;
        $_SESSION["empty"] = $empty;
        header("Location: index.php?sentf#mail-form");
        exit();
    }
}