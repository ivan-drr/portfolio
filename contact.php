<?php 
if(isset($_POST['submit'])){
    $from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email === FALSE) {
        echo 'Invalid email';
        exit(1);
    }

    $to = "ivan.delrr@gmail.com";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";

    $message = $_POST['name'] . " wrote the following:" . "\n\n" . $_POST['message'];
    $message = str_replace("\n.", "\n..", $message);

    $message2 = "Here is a copy of your message " . $_POST['name'] . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $_POST['name'];
}
?>