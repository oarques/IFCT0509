
<?php include "_header.php" ?>


<?php

$correo = $_POST["email"];
$encabezado = $_POST["asunto"];
$comentario = $_POST["cuerpo"];


if(isset($_POST["enviar"])){

		// si eta el multiple seleccionado quiero que me envie todos los email
	if($_POST["check"]){

		$emails = $_POST["direcciones"];

		$text = trim($emails);

		$arrayEmails = explode("/n", $text);

		$arrayEmails = array_filter($arrayEmails, 'trim');
		foreach($arrayEmails as $email){

				email_classic($correo, "oscar", $email, "oscar", $encabezado, $comentario);

}

}

//y si no que me envie solo uno que sera el que hallamos selecionado en el de envio individual.
//y solo se pone else porque solo hay dos opciones si no se pondria else if y lo que fuera
else{ email_classic($correo, "oscar", $correo, "oscar", $encabezado, $comentario);
}	




	//variable que hace referencia a nuestra ariatext donde van puestas nuestras direcciones de correo
	//que luego quedara sustituida por $email al darle las diferentes funciones anteriormente comentadas
	$emails = $_POST["direcciones"];

	//trim quita espacios de principio y final de todo el texto
	$text = trim($emails);

	//explode convierte lineas en un array
	$arrayEmails = explode("/n", $text);

	//quita espacios de principio y final de cada linea
	$arrayEmails = array_filter($arrayEmails, 'trim');

	//recorre todas las lineas
	//pàra cada uno de los emails le das el nombre de linea.$email es la variable final que tendremos que poner junto a las variables del envio. 
	foreach($arrayEmails as $email){

		email_classic($correo, "oscar", $email, "oscar", $encabezado, $comentario);

	}

}


// classic way
function email_classic($from, $from_name, $to, $to_name, $subject, $message){

	$from = $from_name. "<".$from.">\n";

	$headers = "From: {$from}". "\n";
	$headers .= "Reply-To: {$from}". "\n";
	$headers .= "Cc: {$to}\n";
	$headers .= "Bcc: {$to}\n";
	$headers .= "X-Mailer: PHP/".phpversion()."\n";
	$headers .= "MIME-Version: 1.0". "\n";
	$headers .= "Content-Type: text/plain; charset=iso-8859-1";

	$result = mail($to, $subject, $message, $headers);

	echo $result ? 'Message sent!' : 'Mailer Error';
}





 ?>


		<div class="row">

	<form action="email2.php" method="post" >
	<div class="well text-center col-xs-8 col-xs-offset-2"><h3>Formulario de Email</h3></div>

			<div class="well col-xs-5 col-xs-offset-2">

			
			<input type="text text-center" name="asunto" cols="41" placeholder="ASUNTO" ><br>

			
			<textarea name="cuerpo" rows="11" cols="41" class="style1"></textarea>

			<input type="email" name="email" placeholder="Direccion Email">
			
			<!-- button -->
			<input type="checkbox" value="" name="check" ><br><h5>Multiples<h5><br>
			<input type="submit"  name="enviar" class="btn btn-primary  glyphicon glyphicon-envelope">
				
			</div>

			<div class="well col-xs-3 col-xs-offset-0">
			<textarea name="direcciones" rows="16" cols="25"  class="style2"></textarea>
				
			
			</div>
		
				
	</form>	
</div>
<?php include "_footer.php" ?>