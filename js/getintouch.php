<?php
//ini_set('display_errors', 'On'); error_reporting(E_ALL);
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
$mailer = new PHPMailer\PHPMailer();
$mailer->isSMTP();
$mailer->SMTPDebug = 0;
$mailer->SMTPAuth = true;
$mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mailer->IsHtml(true);
/*$mailer->Host = "smtp.gmail.com";
$mailer->SMTPSecure = "ssl";
$mailer->Port = 465;
$mailer->From = "salonappleinfo@gmail.com";
$mailer->Username = 'salonappleinfo@gmail.com';
$mailer->Password = '#SalonAppleVaibhav';*/
$mailer->Host = "smtp.gmail.com";
$mailer->SMTPSecure = "ssl";
$mailer->Port = 465;
$mailer->From = "akash.gole789@gmail.com";
$mailer->FromName = "Layman Saloon";
$mailer->Username = 'akash.gole789@gmail.com';
$mailer->Password = 'akash@789';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Layman Saloon</title>
		<script>
		function redirectPage(){
			window.location='http://localhost/layman/index.html';
		}
		</script>
	</head>
	<body topmargin="5" bottommargin="5" onload="redirectPage()">
		<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
				<td>
					<?php
					
                    $Name = $_REQUEST['name'];                  
                    $Email = $_REQUEST['email'];
                    $Phone = $_REQUEST['phone'];
					$Text = $_REQUEST['message']; 
				 // $Mobile = $_REQUEST['phone'];

						//$mailer->addAddress($Email, $Name);						
						//$mailer->addAddress('nilesh.shinolikar@coderize.in', 'Nilesh');					
						//$mailer->addAddress('cd@cubdesign.co', 'cubdesign');
						$mailer->addAddress('akashgole012@gmail.com', 'akashgole');
						$mailer->Subject = 'Appointment Enquiry - ';
						$body="<font face='Arial' style='font-size: 10pt' color='#333333'>
							Name   						= " . $Name.  "			<br>
                            Email Id  					= " . $Email. "			<br>
                            Phone No  					= " . $Phone. "			<br>
							Message	 					= " . $Text. " 			<br> 
							</font>" ;
						//$mailer->MsgHTML($body);
						$mailer->Body = $body;
						//var_dump($mailer->send());die;
						if (!$mailer->send()) {
						  //echo "Mailer Error: " . $mailer->ErrorInfo; die;
						} else {
						   echo "Your form has been sent!";
						}
					?>
				</td>
			</tr>
		</table>
	</body>
</html>