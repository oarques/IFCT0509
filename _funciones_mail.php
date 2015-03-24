<?php 	
			//remitente					//destino
function mailss($correo, $nombre_remitente, $correo, $nombre_destino, $asunto, $mesaje){

//remitente	  
	$correo = $nombre_remitente . "<".$correo.">\n";

		$headers = "From: {$from}". "\n";
		$headers .= "Reply-To: {$from}". "\n";
		$headers .= "Cc: {$to}\n";
		$headers .= "Bcc: {$to}\n";
		$headers .= "X-Mailer: PHP/".phpversion()."\n";
		$headers .= "MIME-Version: 1.0". "\n";
		$headers .= "Content-Type: text/plain; charset=iso-8859-1";
					//destino
		$result = mail($correo, $asunto, $mesaje, $headers);

		echo $result ? 'Message sent!' : 'Mailer Error';
}
?>
<?php  

				//remitente                   //destino 
// function mails_smtp($correo, $nombre_remitente, $correo, $nombre_destino, $asunto, $mesaje){

// 	require("class.phpmailer.php");

// 			//SMTP Settings
// 			$mail = new PHPMailer();
// 			$mail->CharSet = "UTF-8";
// 			$mail->IsSMTP();
// 			$mail->SMTPAuth   = true; 
// 			$mail->SMTPSecure = "tls"; 
// 			$mail->Port 		= "25";
// 			$mail->Host       = "smtp.gmail.com";
// 			$mail->Username   = $correo;
// 			$mail->Password   = $clave;
			
// 			// From //remitente
// 			$mail->SetFrom($correo, "gmail.com"); //from (verified email address)
// 			//$mail->addReplyTo($from, $from_name);
// 			//message
// 			$mail->Subject = "hi";
// 			$mail->Body = "<p>hhi</p>";
// 			$mail->IsHTML(true);
// 			// $mail->addAttachment("img/logo360.png");
// 			//recipient     //destinatario
// 			$mail->AddAddress($correo, $nombre_destinatario); 
// 			//send the message, check for errors
// 			if (!$mail->send()) {
// 			    echo "Mailer Error: " . $mail->ErrorInfo;
// 			} 
// 			else {
// 			    echo $correo. "<br>";		


// }



 ?>
