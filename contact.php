<?php 

    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['submit'])) {

        $name = $_POST['fname']." ".$_POST['lname'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();
        
        //smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "YourE-mail@gmail.com";
        $mail->Password = 'YourPassword';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($mailFrom, $name);
        $mail->addAddress("YourE-mail@gmail.com");
        $mail->Subject = ("$mailFrom ($subject)");
        $mail->Body = $message;

        if($mail->send()){
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
        header("location: ./index.php");

    }

    //PHP Mail Funtion
    // if (isset($_POST['submit'])) {
        
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $subject = $_POST['subject'];
    //     $mailFrom = $_POST['mail'];
    //     $message = $_POST['message'];

    //     $mailTo = "";
    //     $headers = "From: ".$mailFrom;
    //     $txt = "You have recived an Email from ".$fname." ".$lname.".\n\n".$message;

    //     mail($mailTo, $subject, $txt, $headers);
    //     header("Location: index.php?mailsend");
    // }

?>