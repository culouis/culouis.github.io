<?php
	$name = $_Post['name'];
	$num = $_Post['num'];
	$message = $_POST['subject'];

	
	$email_from= 'vallejo.2015@gmail.com';
	$email_subject= "New Form Submission";
	$email_body="Name: $name.\n".
					"Telephone Number: $num.\n".
					"Message = $message.\n".;
					
	$to = "vallejo_omar@columbusstate.edu";
	
	$headers="From $email_from \r\n";
	$headers .="Reply-To: $num \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location:index.html);
	

?>