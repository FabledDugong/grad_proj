<?php
if (isset($_POST["submit_success"])) {
    $senderName = $_POST["name"];
    $senderMail = $_POST["mail"];
    $reciever = "zouharmi@spse.cz";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    mail($senderMail,$subject,$message, "From: " . $senderMail,null);
}
// mail handling