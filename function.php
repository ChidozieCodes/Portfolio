<?php
function email() {
	if (isset($_REQUEST['add'])) {
		
		$name = $_REQUEST['fullname'];
		$useremail = $_REQUEST['email'];
		$userMessage = $_REQUEST['msg'];
		$toEmail = 'iwuanyanwuaugustine@gmail.com';

		$mailHeader = "Name: " . $name.
		"\r\n Email: " . $useremail .
		"\r\n Message: " . $userMessage . "\r\n";

		if (mail($toEmail, $name, $mailHeader )) {

			echo "<div id='success'>Message Received, will get back to you shortly</div>";
		}else{
			echo "<div id='fail'> your message failed to send</div>";
		}


	}
}

?>