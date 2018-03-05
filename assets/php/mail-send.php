<?php
if (empty($_POST) === false) {
    /* echo print_r($_POST, true) */
    $errors = array();

    $senderName = $_POST["name"];
    $senderMail = $_POST["mail"];
    $senderSubject = $_POST["subject"];
    $senderMessage = $_POST["message"];
    $receiver = "mzouhar3@gmail.com";


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

        if (empty($errors) === true) {
            mail($receiver, $senderSubject, $senderMessage, "From: " . $senderMail, null);
            header("Location: index.php?sent");
            exit();
        }
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
        if($errors === "That's not a valid email.") {

        }
    }
}
// mail handling