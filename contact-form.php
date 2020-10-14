<?php
$to="info@berylconsultinglimited.com";/*Your Email*/

$subject=$_REQUEST['subject'];

$date=date("l, F jS, Y");
$time=date("h:i A");
$full_name=$_REQUEST['full_name'];
$email_address=$_REQUEST['email_address'];
$message=$_REQUEST['message'];


$msg="
	Message sent from website on date:  $date, hour: $time.\n
	Name: $full_name\n
	Email: $email_address\n
	Message: $message
	";
if($email=="" or $full_name=="" or $message=="") {
echo "<div class='alert alert-danger'>
		  <a class='close' data-dismiss='alert'>×</a>
		  <strong>Warning!</strong> Please fill all the fields.
	  </div>";
} else {
mail($to,$subject,$msg,"From:".$email_address);
header('Location: thankyou.php');
}
?>
