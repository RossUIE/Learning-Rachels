<?php
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = "Learning@Rachels: " . $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $mailTo = "learningatrachels@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name. ".\n\n" . "Phone Number (if given):". $phone . ".\n\n" .$message;
     mail($mailTo, $subject, $txt, $headers);
     header("Location: mailSent.html");
}
 ?>