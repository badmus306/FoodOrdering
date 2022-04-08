<?php


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$to = "info@bestbuy.com";
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new mail from Best Buy Ltd;. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message: \n $message";

	$headers = "From: Best Buy Ltd\n";
	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	//header('Location: contact_success.php');

  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'";
  echo "alert('Thanks for contacting Best Buy Ltd. We shall get back to you soon!');window.location.href='contact.php'";
   echo '</script>';
    exit;

?>
