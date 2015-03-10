
<?php include "_header.php" ?>


<?php

$correo = $_POST["email"];
$encabezado = $_POST["asunto"];
$comentario = $_POST["cuerpo"];


if(isset($_POST["enviar"])){

	email_classic($correo, "oscar", $correo, "oscar", $encabezado, $comentario);
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
	<div class="well text-center"><h3>Formulario de Email</h3></div>

			<div class="well col-xs-5 col-xs-offset-2">

			
			<input type="text text-center" name="asunto" cols="41" placeholder="ASUNTO" ><br>

			
			<textarea name="cuerpo" rows="11" cols="41" class="style1"></textarea>

			<input type="email" name="email" placeholder="Direccion Email">
			
			
			<input type="checkbox" value="multiples" name="check" ><br><h5>Multiples<h5><br>
			<input type="submit" value="enviar" name="enviar" class="bnt btn-primary" >

			</div>

			<div class="well col-xs-3 col-xs-offset-0">
			<textarea name="el texto" rows="16" cols="25" <textarea name="el texto" rows="16" cols="25" class="style2"></textarea>
				
			
			</div>
		
				
	</form>	
</div>
<?php include "_footer.php" ?>