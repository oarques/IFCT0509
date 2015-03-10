<?php include "_header.php" ?>

<!--  //modo sencillo de enviar email -->
<?php 
$destino="oarques@gmail.com";
$asunto= "comentario";
$desde = 'From: ' .$_POST["email"];
$comentario = "
\n
asunto : $_POST[asunto]\n
Email: $_POST[email]\n
Cuerpo: $_POST[cuerpo]\n

";
mail($destino, $asunto, $comentario, $desde);


?>	


<div class="row">

	<form action="email.php" method="post" >
			<div class="well col-xs-7 "><h2>asunto<h2>

			
			<input type="text" name="asunto" cols="41" ><br>

			
			<textarea name="cuerpo" rows="11" cols="41"></textarea>

			<input type="email" name="email">

			
			<input type="checkbox" value="multiples" name="check"><h5>multiples<h5>
			<input type="submit" value="enviar" name="enviar">

			</div>

			<div class="well col-xs-5 "><h2>email<h2>
			<textarea name="el texto" rows="16" cols="25"></textarea>
				
			
			</div>
		
				
	</form>	
</div>

	

	
<?php include "_footer.php" ?>
