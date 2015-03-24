<?php include "_header.php" ?>
<?php include "_config.php" ?>
<?php 
//agregamos la dependencia de Swift Mailer
require_once 'php/ext/Swift-4.2.1/lib/swift_required.php';
 ?>


 <div class="well">
		




	<?php
	
		
		//configuracion de la cuenta
		$objCuentaUtilizada=Array(
			'smtp'			=>	'mail.dominio.com',		//direccion del smtp
			'puerto'		=>	25,						//puerto smtp
			'nombre'		=>	'oscar',			//nombre que aparecera en los correos
			'cuenta'		=>	$correo,	//cuenta que vamos a usar (colocar con @)
			'usuario'		=>	$correo,	//usuario de smtp
			'contrasena'	=>	$clave	//contrasena de smtp
		);
		
		//creamos el nuevo transporte de Swift con los datos de conexion
		$objTransporte=Swift_SmtpTransport::newInstance($objCuentaUtilizada['smtp'],
		$objCuentaUtilizada['puerto'])
			->setUsername($objCuentaUtilizada[$correo])		//le indicamos el usuario smtp que vamos a usar
			->setPassword($objCuentaUtilizada[$clave])	    //contrasena del usuario smtp
		;
		
		//instanciamos el mailer con los datos de conexion establecidos anteriormente
		$objMailer=Swift_Mailer::newInstance($objTransporte);
		
		//creamos el mensaje
		$objMensaje=Swift_Message::newInstance('prueba con swift mail')							//asunto del mensaje
			->setFrom(array($objCuentaUtilizada['cuenta'] => $objCuentaUtilizada['nombre']))	//quien esta enviando el mensaje?
			->setTo(array($correo => 'oscar arques'))								//a quien le enviamos el mensaje?
			->setBody('<h1>Hola mundo!</h1><p>Prueba de lewebmonster.com</p>')					//cuerpo del mensaje	
			->setContentType('text/html')														//mensaje en formato HTML
		;
		
		//enviamos el mensaje
		if($objMailer->send($objMensaje)){
			echo 'El mensaje se envi&oacute; correctamente!';
		}else{
			echo 'El mensaje no fue enviado!';
		}
	?>

</div>	
<?php include "_footer.php" ?>