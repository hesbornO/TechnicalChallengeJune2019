<?php

// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

//user entry is stored in text

if ( $text == "" ) {

	 $response  = "CON Enter Username and Email Separated by Hash \nExample: yourusername#username@mail.com";	//first message displayed on submission of USSD code

}else if(strpos($text,'#') !== false)										//make sure user input has #
{
  $split = explode("#",$text);												//user input is separated by #
  $username = $split[0];													//first part is the username
  $email = $split[1];														//second part is the email

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {							//email validation
	  $response = "END Invalid email format! \nRevalidate your email \nEmail should be after hash sign.";
	}else{
    $response = "END Congratulations $username! You have been successfully registered.\n\n";
    $response .= "Your Details are \n Username: $username\nEmail:$email\nPhone: $phoneNumber";			//display user details
  }

}

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;  	//display response

// DONE!!!
?>













