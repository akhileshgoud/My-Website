<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'info@akhileshgoud.me';
	$subject = 'My WebSite Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = '<div class=pfblock-subtitle>Thank you for your message. <br> Will get back to you soon!</div>';
    }
	else{
		$res['message'] = '<div class=pfblock-subtitle>Failed to send the E-mail! <br> Please mail me at info@akhileshgoud.me</div>';
	}
	
	
	echo json_encode($res);
}

?>
