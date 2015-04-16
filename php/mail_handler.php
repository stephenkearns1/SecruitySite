<?php
error_reporting(-1);
ini_set('display_errors', 'On');

//$mail = new PHPMailer(true);
//if(isset($_POST['submit'])){
	/*$mail -> IsSMTP();
	$mail -> SMTPAuth = true;
	$mail -> SMPTSecure = "ssl";
	$mail -> Host = "smtp.gmail.com";
	$mail -> port = "465";
	$mail -> username = "gwcyberprofessionals@gmail.com"
	$mail -> password = "GWSecurity00";
	*/

    $ce = "gwcyberprofessionals@gmail.com"; //password: GWSecurity00
	$from = $_POST['email']; //ursers emal
	$name = $_POST['name']; // name of user
	$subject = "Form submission";
	$message = $_POST['comment']; // user comment

	$header = "form:" . $form;

	$mail -> AddAddress($from,$name);
	$mail -> subject = $subject;
	$mail -> body = $message
	//mail ($ce, $subject,$comment, $header);
	/* $smtp = Mail::factory('smtp',array(
      'host' => 'sll://smpt.gmail.com',
      'port' => '465',
      'auth' => true,
      'username' => 'gwcyberprofessionals@gmail.com'
      'password' => 'GWSecurity00'
  
	  ));//sends form submission to email
	try{
		$mail->Send();
		echo "success";
	}catch(Exception $e){
		echo "fail -" . $mail->ErrorInfo;
	}*/

	if(mail($ce,$subject,$message)){
    echo "mail send successful";
    }
   else{
    echo "mail send fail";
	}

	echo "Mail Sent, thank you" . $name . ", we will contact you shortly.";

//}
?>