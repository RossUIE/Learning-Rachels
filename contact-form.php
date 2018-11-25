<?php
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
     $mailTo = "r.mcmurray1@hotmail.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name. ".\n\n".$message;
     mail($mailTo, $subject, $txt, $headers);
     header("Location: mailSent.html");
}
 ?>