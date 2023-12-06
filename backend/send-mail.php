<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_GET['mail'])) { // Check if the form was submitted

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

$mail->isSMTP();											
	$mail->Host	 = "smtp.gmail.com";					
	$mail->SMTPAuth = true;							
   
	$mail->Username = "krishbaghel2002@gmail.com";
    	
	$mail->Password = 'wgyp powu khwh vbkg';					
	$mail->SMTPSecure = 'tls';				 			
	$mail->Port	 = 587;
	// $mail->SMTPDebug = 2;


	$mail->setFrom('krishbaghel2002@gmail.com', 'Krishna Kumar');	
		
	
	$mail->addAddress('krishbaghel2002@gmail.com', 'Krishna Kumar');
	
	$mail->isHTML(true);								
	$mail->Subject = "$name | New Client";
	$mail->Body ="Hello Krishna Kumar!<br><br>
            We've got exciting news! Someone awesome named $name has just filled out your portfolio form on your fantastic website. Let's check out the details:<br><br>
            Name: $name<br>
            Email: $email<br>
            Phone: $number<br>
            Message: $message<br><br>
            It's always a pleasure to hear from your site visitors. You'll be in touch with $name shortly to discuss their inquiry. Keep rocking!";

	$mail->AltBody = 'Body in plain text for non-HTML mail clients';

    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully';
    } else {
        echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
