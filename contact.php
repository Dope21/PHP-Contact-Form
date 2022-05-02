<?php 

    if (isset($_POST['submit'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "";
        $headers = "From: ".$mailFrom;
        $txt = "You have recived an Email from ".$fname." ".$lname.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>