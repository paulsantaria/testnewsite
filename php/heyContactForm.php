<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $companyname = $_POST['companyname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "hey@lukaymedia.com";
    $headers = "From: ".$email;
    $txt = "Haz recibido un mensaje de ".$name " ".$lastname ".\n\n".$message".\n\n"."compañia ".$companyname;



    mail($mailTo, $companyname, $txt, $headers);
    header("Location: index.php?mailsend");
}