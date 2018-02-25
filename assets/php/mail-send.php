<?php
if (empty($_POST) === false) {
   /* echo print_r($_POST, true) */
    $errors = array();

    $senderName = $_POST["name"];
    $senderMail = $_POST["mail"];
    $senderSubject = $_POST["subject"];
    $senderMessage = $_POST["message"];
    $receiver = "mzouhar3@seznam.cz";


  //  try {
        if(empty($senderName) === true || empty($senderMail) === true || empty($senderSubject) === true || empty($senderMessage) === true) {
            $errors[] = "Required fields are empty.";
            /* throw new Exception("Required fields are empty."); */
        } else if (filter_var($senderMail, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = "That's not a valid email.";
           /* throw new Exception("That's not a valid email."); */
        } else if (ctype_alpha($senderName) === false) {
            $errors[] = "Name must only contain letters.";
           /* throw new Exception("Name must only contain letters."); */
        } else if (strlen($senderMessage) >= 500) {
            $errors[] = "Your message is too long. Make it more brief.";
           /* throw new Exception("Your message is too long. Make it more brief.");*/
        }

        if(empty($errors) === true) {
            mail($receiver,$senderSubject,$senderMessage, "From: " . $senderMail,null);
            header("Location: index.php?sent");
            exit();
        }
  //  } catch(Exception $e) {
  //      echo $e;
  //  }
}
// mail handling