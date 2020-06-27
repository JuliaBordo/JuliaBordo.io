<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subjext = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "JuliaBordovskay@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message; 

    mail($mailTo, $subjext, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>