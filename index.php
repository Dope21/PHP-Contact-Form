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
        <section class="contact">
            <div class="contact__form">
                <h1>Get In Touch</h1>
                <form  action="contact.php" method="POST">
                    <div class="contact__inline">
                        <input class="contact__input" type="text" name="fname" placeholder="First name">
                        <input class="contact__input" type="text" name="lname" placeholder="Last name">
                    </div>
                    <div class="contact__inline">
                        <input class="contact__input" type="text" name="mail" placeholder="Mail">
                        <input class="contact__input" type="text" name="subject" placeholder="Subject">
                    </div>
                    <textarea class="contact__input contact__textarea" name="message" placeholder="Message"></textarea>
                    <button class="contact__button" type="submit" name="submit">SEND</button>
                </form>
            </div>
        </section>
        
    </main>
</body>
</html>