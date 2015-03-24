<?php include "_header.php" ?>

 <div class="well">

 <?php



require("class.phpmailer.php");

	//SMTP Settings
	$mail = new PHPMailer();
	$mail->CharSet = "UTF-8";
	$mail->IsSMTP();
	$mail->SMTPAuth   = true; 
	$mail->SMTPSecure = "tls"; 
	$mail->Port 		= "25";
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = $correo;
	$mail->Password   = "*******";
	
	// From
	$mail->SetFrom($correo, "gmail.com"); //from (verified email address)
	//$mail->addReplyTo($from, $from_name);
	//message
	$mail->Subject = "hi";
	$mail->Body = "<p>hhi</p>";
	$mail->IsHTML(true);
	// $mail->addAttachment("img/logo360.png");
	//recipient
	$mail->AddAddress($correo, $correo); 
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo $correo. "<br>";
	}
	
	
	
// $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

// $mail->IsSMTP(); // telling the class to use SMTP

// try {
//   $mail->Host       = "mail.yourdomain.com"; // SMTP server
//   $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
//   $mail->SMTPAuth   = true;                  // enable SMTP authentication
//   $mail->Host       = "mail.yourdomain.com"; // sets the SMTP server
//   $mail->Port       = 26;                    // set the SMTP port for the GMAIL server
//   $mail->Username   = "yourname@yourdomain"; // SMTP account username
//   $mail->Password   = "yourpassword";        // SMTP account password
//   $mail->AddReplyTo('name@yourdomain.com', 'First Last');
//   $mail->AddAddress('whoto@otherdomain.com', 'John Doe');
//   $mail->SetFrom('name@yourdomain.com', 'First Last');
//   $mail->AddReplyTo('name@yourdomain.com', 'First Last');
//   $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
//   $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
//   $mail->MsgHTML(file_get_contents('contents.html'));
//   $mail->AddAttachment('images/phpmailer.gif');      // attachment
//   $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
//   $mail->Send();
//   echo "Message Sent OK<p></p>\n";
// } catch (phpmailerException $e) {
//   echo $e->errorMessage(); //Pretty error messages from PHPMailer
// } catch (Exception $e) {
//   echo $e->getMessage(); //Boring error messages from anything else!
// }	
	
	
	
// $mail->IsSMTP();
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = "tls";
// $mail->Host = "smtp.gmail.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
// $mail->Username = "info@gmail.com"; // Correo completo a utilizar
// $mail->Password = "***"; // Contraseña
// $mail->Port = 465; // Puerto a utilizar
// $mail->From = info@gmail.com"; // Desde donde enviamos (Para mostrar)
// $mail->FromName = "gmail.com";
// $mail->AddAddress(info@gmail.com"); // Esta es la dirección a donde enviamos
// //$mail->AddCC("cuenta@dominio.com"); // Copia
// //$mail->AddBCC("cuenta@dominio.com"); // Copia oculta
// $mail->IsHTML(true); // El correo se envía como HTML
// $mail->Subject = "Titulo"; // Este es el titulo del email.
// $body = "Hola mundo. Esta es la primer línea<br />";
// $body .= "Aquí continuo el <strong>mensaje</strong>";
// $mail->Body = $body; // Mensaje a enviar
// $mail->AltBody = "Hola mundo. Esta es la primer línean Aquí continuo el mensaje"; // Texto sin html
// $mail->AddAttachment("imagenes/imagen.jpg", "imagen.jpg");
?>
		
</div>

<?php include "_footer.php" ?>

