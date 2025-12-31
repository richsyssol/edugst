<?php 

if($_SERVER['REQUEST_METHOD'] !== 'POST' && !isset($_POST)){
    header('location: index.php');
    exit;
}







if($_POST && isset($_POST['submit'])){
    
    
    include_once 'class_mail.php';

$email = $_POST['email'];
$contact = $_POST['contact'];
$name = $_POST['name'];









 if($email && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
     
     
     
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){
		
	
		
		
            $messageTemplate = "<h4>User Details For Register</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "Email:" . $_POST['email'] . "<br>" . "Contact:" . $_POST['contact'] ;

 $user_mail = new Sendmail();
    $owner_mail = new Sendmail();


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "EduGst", "User Details For Subscription", $messageTemplate); // to owner get info related user
            
   
            
            
            if ($userMail && $ownerMail) {
               header('Location: web_welcome.php');
               exit;
            }
        }
	}





    
    
}




?>