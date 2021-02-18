<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = "Website Submission";
	$message = $_POST['message'];
	$mailTo = "rtw@realtalkwindsor.com";
	$txt = "You have received an e-mail from ". $name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt);
	header("Locatiom: contact.html?mailsend");
}

?>