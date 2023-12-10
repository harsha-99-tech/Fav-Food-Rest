<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subjet = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'littleboyhn99@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subjet.\n".
                "User Message: $message.\n";

$to = 'littleboyhn99@gmail.com';
$headers = "Form: $email_form\r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>