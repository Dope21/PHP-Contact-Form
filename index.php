<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
    <title>Contact Form</title>
</head>
<body>
    <main class="main">
        <p>SEND E-MAIL</p>
        <form class="contact__form" action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>