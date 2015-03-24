
<?php 
//require_once:cargamelo pero si ya esta cargado no me lo vuelvas a cargar.
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");
?>
<?php include "_config.php" ?>
<?php include "_header.php" ?>

<?php  
 if(isset($_POST["enviar"])){


 	//SMTP Settings
	$mail = new PHPMailer();
	$mail->CharSet = "UTF-8";
	$mail->IsSMTP();
	$mail->SMTPAuth   = true; 
	
	$mail->SMTPSecure = "ssl"; 
	$mail->Port 		= 465;
	$mail->Host       = "ssl://smtp.gmail.com";
	$mail->Username   = $correo;
	$mail->Password   = $clave;
	
	// remitente
	$mail->SetFrom($correo, "tu nombre"); 
	$mail->addReplyTo($correo, "tu nombre");

	// asunto
	$mail->Subject = "prueba de email";

	// fichero html 
	//$body = file_get_contents('contenido.html');
    //$mail­>MsgHTML($body);

    // html directo
	$mail->Body = "<p>hhi</p>";
	$mail->IsHTML(true);



	// destinatario
	$mail->AddAddress($correo, "Pepe Grillo"); 

	//send the message, check for errors
	if (!$mail->send()) {
	   $resultado =  "Mailer Error: " . $mail->ErrorInfo;
	} else {
	   $resultado =  $correo. "<br>";
	}

	

}

?>

 <div class="well text-center col-xs-6 col-xs-offset-3">

	<form action="email00.php" method="post">

		<input type="submit" name="enviar" value="Enviar mail" class="btn btn-lg btn-info">
		
	</form>
		<?php echo $resultado ?>
 </div>
		


<?php include "_footer.php" ?>

