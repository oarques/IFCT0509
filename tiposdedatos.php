<?php include "_header.php"?>

 <div class="well">Cadenas de texto</div>
 <?php  $texto = "La rápida liebre marrón se llama Silvia" ?>
  <div class="row">
  			<div class="col-xs-6">
  					minusculas: <?php	echo strtolower($texto) ?><br>	
  					mayusculas: <?php	echo strtoupper($texto) ?><br>	
  			</div>

  			<div class="col-xs-6">
  			<strong>1ª mayuscula:</strong><?php	echo ucfirst($texto) ?><br>	
  			<strong>1ªs mayusculas:</strong><?php echo ucwords($texto) ?><br>	
  			<strong>Longitud:</strong><?php echo strlen($texto) ?><br>	
  			<strong>reemplazar:</strong><?php echo str_replace("Silvia", "Maria", $texto) ?><br>	
  			<strong>Espacios:</strong><?php echo trim($texto) ?><br>	
  			<strong>Buscar:</strong><?php echo strstr($texto, "liebre") ?><br>	
  			</div>
  	</div>
		
 <div class="well">Números</div>
  <div class="row">
		<div class="col-xs-12">	
		<?php 	
			$var1 = 3;
			$var2 = 4;
		 ?>
		Matematicas básicas <?php 	echo ((1 + 2 + $var1) * $var2) / 2 -5; ?><br>	
		<br>	
		Potencia:				<?php 	echo pow(2,8); ?><br>	
		Raiz cuadrada:			<?php 	echo sqrt(100); ?><br>	
		Nº al azar:				<?php 	echo rand(); ?><br>	
		Nº al azar (1-10):		<?php 	echo rand(1,10); ?><br>
		Valor absoluto:			<?php 	echo abs(1 - 300); ?><br>		
		</div>	

	</div>

<?php include "_footer.php"?>
