<?php
//Oswago Hesborn
//University of Nairobi
//Reg: P15/44220/2017


// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

//user input is stored in text

if ( $text == "" ) {                              //first message displayed on submission of USSD code

	 $response  = "CON Enter Username and Email Separated by Hash \nExample: yourusername#username@mail.com";	

}else if(strpos($text,'#') !== false)						  //make sure user input has # to separate the two items
{
  $split = explode("#",$text);										//user input is separated by # and stored in split variable
  $username = $split[0];													//first value of split is the username
  $email = $split[1];													  	//second value of split is the email

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {							//email validation using in-built function
	  $response = "END Invalid email format! \nRevalidate your email \nEmail should be after hash sign.";
	}else{
    $response = "END Congratulations $username! You have been successfully registered.\n\n";     //registration notification   
    $response .= "Your Details are \n Username: $username\nEmail:$email\nPhone: $phoneNumber";	  //display user details
  }

}

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;  	//display response

// SHORT NOTES
//This program uses an FTP(FileZilla) server whose access I got from a friend of mine
//an external server is unnecessary for the USSD code to work
?>













