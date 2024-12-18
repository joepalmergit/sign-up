<?php

    $username = $_POST["username"];
    $email_address = $_POST["email_address"];

    $username = trim($username);
    $email_address = trim($email_address);

    if (empty($username)) {
        echo "<p>You must enter a username.</p>";
        die();
    }

    $username_length = strlen($username);
    
    if ($username_length < 2) {
        echo "<p>Your username must be at least two characters long.</p>";
        die();
    }

    if (empty($email_address)) {
        echo "<p>You must enter an email address.</p>";
        die();
    }

    if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        echo "<p>You must enter a valid email address.</p>";
        die();
    }

    echo "<p>Thank you for registering.</p>";

?>
