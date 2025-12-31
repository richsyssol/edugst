<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="card">
                        <h2 class="text-center py-3">Contact Form</h2>
                        <div class="card-body">
                            <form action="<?php stripcslashes(htmlspecialchars($_SERVER['PHP_SELF'])); ?>"
                                method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label"> Name</label>
                                    <input type="name" name="name" class="form-control" id="name"
                                        placeholder="Your  Name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary form-control">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>



<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


define('host_mail','yogeshsonawane767@gmail.com');
define('host_password','nqrjkqtzhcqzqpnw');
define('message','Thank you for visiting our page.');

if (isset($_POST['submit'])) {



    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

//------------------------------------- Default PHP mail ---------------------------

        $name = $_POST['name'];

        $toEmail = $_POST['email']; 






function sendEmail($rec,$name){

    $mail = new PHPMailer(true);
    try {
    
                    
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                    
        $mail->Username   = host_mail;                    
        $mail->Password   = host_password;                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             
        $mail->Port       = 465;                                    
        $mail->setFrom(host_mail, 'Yogesh');
        $mail->addAddress($rec, $name);    
        $mail->addReplyTo(host_mail, 'Host');
         $mail->addCC(host_mail);
        // $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);                                  
        $mail->Subject = 'Welcome Message';
        $mail->Body    = message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
};


$result = sendEmail($toEmail,$name);

print_r($result);

    } 



















}


?>