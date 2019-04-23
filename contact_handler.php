<?php

if($_POST["submit"]) {
    $mailTo="contactxhi@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $mailFrom=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $mailFrom\n\n$message";

    mail($mailTo, $subject, $mailBody, "From: $name <$mailFrom>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
