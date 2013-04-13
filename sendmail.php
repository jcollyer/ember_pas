

<title>sendmail</title>

<?php 
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$formcontent="From: $name \n $number \n $email \n Message: $message";
	$recipient = "collyerdesign@gmail.com" ;
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header( 'Location: thankyou.php' );
?>


<?php

$name ="$name"; 
$number="$number"; 
$email="$email"; 
$message="$message";


$header="from: $name <$email>";

// Enter your email address
$to ='collyerdesign@gmail.com';
$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>




<?php
  $name = $_REQUEST['name'] ;	
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "collyerdesign@gmail.com", "Feedback Form Contact Box",
    $message, "From: $name $email" );
  header( "Location: thankyou.html" );
?>

