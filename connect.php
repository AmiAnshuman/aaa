 <?php
 require("PHPMailer_5.2.0/class.phpmailer.php");
include("PHPMailer_5.2.0/class.smtp.php");
if (isset($_POST['submit']))
{
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.zoho.com";
$mail->Port = 587;// specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug  = 1; 
$mail->Username = "anshuman@aaatechno.com";  // SMTP username
$mail->Password = "P@ssw0rd"; // SMTP password
$mail->SMTPSecure = "tls";
$mail->From = "anshuman@aaatechno.com";
 $mail->FromName = $_POST["name"]; 

$mail->AddAddress("sales@aaatechno.com");                  // name is optional


$mail->WordWrap = 50;                                 // set word wrap to 50 characters
   // optional name
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = $_POST["subject"];    //Sets the Subject of the message
$mail->Body = 'email:'.$_POST["email"]."                                  ".'phone:'.$_POST["phone"].'                                  '.'message:'.$_POST["message"]; 

 if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
}
?>
