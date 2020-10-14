<?php
$to="info@berylconsultinglimited.com";/*Your Email*/

$subject='Registration for training on website.';

$date=date("l, F jS, Y");
$time=date("h:i A");
$organization=$_REQUEST['organization'];
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$business_process=$_REQUEST['business_process'];
$bp_date1=$_REQUEST['bp_date1'];
$bp_date2=$_REQUEST['bp_date2'];
$business_analysis=$_REQUEST['business_analysis'];
$ba_date1=$_REQUEST['ba_date1'];
$ba_date2=$_REQUEST['ba_date2'];
$project_management=$_REQUEST['project_management'];
$pmp_date1=$_REQUEST['pmp_date1'];
$pmp_date2=$_REQUEST['pmp_date2'];
$web_design=$_REQUEST['web_design'];
$wd_date1=$_REQUEST['wd_date1'];
$wd_date2=$_REQUEST['wd_date2'];
$social_media_seo=$_REQUEST['social_media_seo'];
$sms_date1=$_REQUEST['sms_date1'];
$sms_date2=$_REQUEST['sms_date2'];


$msg="
	Message sent from website on date:  $date, hour: $time.\n
	Organization: $organization\n
	First Name: $first_name\n
	Last Name: $last_name\n
	Phone Number: $phone\n
	Email: $email\n
	Address: $address\n
	City: $city\n
	State: $state\n
	Country: $country\n
	
	Training(s) interested in;
	
	Business Process Improvement: $business_process\n
	Preferred Date: $bp_date1\n
	Preferred Date: $bp_date2\n
	Business Analysis: $business_analysis\n
	Preferred Date: $ba_date1\n
	Preferred Date: $ba_date2\n
	Project Management Empowerment: $project_management\n
	Preferred Date: $pmp_date1\n
	Preferred Date: $pmp_date2\n
	Web Design: $web_design\n
	Preferred Date: $wd_date1\n
	Preferred Date: $wd_date2\n
	Social Media & SEO: $social_media_seo\n
	Preferred Date: $sms_date1\n
	Preferred Date: $sms_date2\n
	";
if($email=="" or $first_name=="" or $last_name=="" or $phone=="") {
echo "<div class='alert alert-danger'>
		  <a class='close' data-dismiss='alert'>×</a>
		  <strong>Warning!</strong> Please fill all the fields.
	  </div>";
} else {
mail($to,$subject,$msg,"From:".$email);
header('Location: thankyou.php');
}
?>
