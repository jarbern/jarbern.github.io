<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "youremail@example.com";
    $subject = "New message from $name";
    $txt = "You have received a new message from $name.\n\n" . $message;
    $headers = "From: $email" . "\r\n" .
    "CC: jared@revico.com";

    mail($to,$subject,$txt,$headers);
    echo "Your message has been sent successfully!";

}

?>
