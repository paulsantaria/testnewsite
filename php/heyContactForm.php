<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $companyname = $_POST['companyname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "hey@lukaymedia.com";

    mail($mailTo, $name, $lastname, $message);
    header("Location: index.php?mailsend");
}