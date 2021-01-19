<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New Form Submission from SeismoVLAB";
        
    $mailTo = "dkusanov@caltech.edu";
    $headers = "From: ".$mailFrom;
    $text = "User Name: ".$name.".\n\n".$message";

    mail($mailTo, $subject, $text, $headers);

    header("Location: contact.html");
}
    
?>
