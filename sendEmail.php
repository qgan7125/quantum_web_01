<?php
if(isset($_POST['submit'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $Email = $_POST['email'];
    $Need = $_POST['need'];
    $Message = $_POST['message'];

    $mailTo = "gq12121@gmail.com";
    $headers = "From: ".$Email;
    $txt = "You have received an e-mail from ".$firstName." ".$lastName.".\n\n".$Message;

    mail($mailTo, $Need, $txt, $headers);
    header("Location: contact.php?active=Contact");
}

?>