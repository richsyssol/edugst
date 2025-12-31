
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


define('host_mail', ' info@edugst.demovoting.com');
define('host_password', 'Edugst@info123');



class Sendmail
    {

        public $mail;



        public function __construct()
        {

            $this->mail = new PHPMailer(true);
        }




        public function sendingMail($rec, $name, $subject = "Subject Sample", $message = "This is default", $attachement = '')
        {

            try {

                // $this->mail->SMTPDebug = 2;            
                // $this->mail->isSMTP();
                $this->mail->Host       = 'smtp.hostinger.com';
                $this->mail->SMTPAuth   = true;
                $this->mail->Username   = host_mail;
                $this->mail->Password   = host_password;
                $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $this->mail->Port       = 465;
                $this->mail->setFrom(host_mail, 'EduGst');
                $this->mail->addAddress($rec, $name);
                $this->mail->addReplyTo(host_mail, 'EduGst');
                //  $mail->addCC(host_mail);
                // $mail->addBCC('bcc@example.com');



                ($attachement) ? $this->mail->addAttachment($attachement) : '';               // Add PDF attachment

                $this->mail->isHTML(true);
                $this->mail->Subject = $subject;
                $this->mail->Body    = $message;
                $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $this->mail->send();

                return 'Message has been sent';
            } catch (Exception $e) {
                echo "Exception: {$e->getMessage()}";
                return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
            }
        }
    }

?>