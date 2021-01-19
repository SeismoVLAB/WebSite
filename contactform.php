<?php

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $subject  = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message  = $_POST['message'];

    $mailTo  = "dkusanov@caltech.edu";
    $headers = "From: ".$mailFrom;
    $text    = "Name: ".$name."\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.html?mailsend");
}

?>
