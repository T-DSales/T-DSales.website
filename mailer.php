<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$to = 'masterelectrician88@gmail.com;
	$subject = 'Contact form Results';
	$message = 'Name: '.$name. "\r\n". 'Email: '.$email. "\r\n". 'phone: '.$phone . "\r\n". 'Message from user: '. $message;
	$header = 'From: '. $name . '<' . $email. '>'. "\r\n" . 'Reply-To: '.$email . "\r\n". 'X-Mailer: PHP/'.phpversion();
	$check1 = strpos($email, '@', 1);
	if($check1 == true)
	{
		$check2 = strpos($email, '.', 4);
		if($check2 == true)
		{
			if(mail($to,$subject,$message,$header))
				echo "Email sent successfully!";
			else
				echo "Email Sending Failed!";
		}else{
			echo "The email address you entered is invalid!";
		}
	
	}else{
		echo "The email address you entered is invalid! Please Check it!";
	}
?>
