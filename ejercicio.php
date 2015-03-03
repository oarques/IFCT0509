<?php include "_header.php" ?>

<?php  
		$nombre = $_POST["nombredelcliente"];
		$dni = $_POST["dni"];
		$fechaNac = $_POST["fechadenacimento"];
		$fecha =  date('Y-m-d');
		$condiciones = $_POST["condiciones"];
		//$interval = $fechaNac->diff($fecha);
		//$interval = $fechaNac-> date_diff($fecha);
		


		



?>

<!-- <h3>hoy es: <?php echo date('l jS \of F Y h:i:s A'); ?>	</h3> -->
<h3>hoy es: <?php echo $fecha; ?>	</h3>
<h3>Tu nombre es: <?php echo ucwords($nombre); ?></h3>
<h3>El dni es: <?php echo($dni); ?></h3>
<h3>Mi fecha de nacimiento es: <?php echo($fechaNac);	?></h3>
<h3>Mi nombre tiene: <?php echo strlen($nombre);	?>caracteres</h3>
<h3>Me llamo: <?php echo strtoupper($nombre); ?>	</h3>
<h3>Naciste en el año: 	</h3>
<h3>Naciste el año: <?php echo $fechaNac; ?>
<h3>Naciste el año: <?php echo $fecha; ?>
<h3>Aceptar condiciones de uso: <?php echo $condiciones; ?></h3>





	

	

<?php include "_footer.php"?>
