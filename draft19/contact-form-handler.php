<?php
	$name = $_Post['name'];
	$num = $_Post['num'];
	$message = $_POST['subject'];

	
	$email_from= 'vallejo.2015@gmail.com';
	$email_subject= "Comment from  Customer-Website";
	$email_body="Name: $name.\n".
					"Telephone Number: $num.\n".
					"Message : $message.\n";
					
	$to = "luvamar_rx@yahoo.com";
	
	$headers="From $name \r\n";
	$headers .="Reply-To: $num \r\n";
	mail($to,$email_subject,$email_body);
	header("Location:index.html");
	

?>