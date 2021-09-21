<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $email_from = 'playerpiya1234@gmail.com';

    $email_address = 'Verify';

    $email_body = "Full Name:  $name. \n".
                    "User Email: $email. \n".
                    "User Message: $message. \n";

    $to = "pranjalpiya10@gmail.com";

    $header = "From: $email_form  \r\n";
    $header .="Reply-To: $email  \r\n";

    mail($to,$email_address,$email_body,$header);

    header("Location: contact.html")

?>