<?php include "_header.php" ?>

<div class="well">suma</div>
<?php  
$a = $_POST["numero_1"];
$b = $_POST["numero_2"];
// $usuario = $_POST["nuevousuario"]


?>
	<!-- PHP dentro de html -->
	<!-- <p>La suma de los dos números és = <?php  echo $a + $b ?> </p -->
	</br>

	<!-- html dentro de PHP -->
	 <?php //echo "<p>La suma de los numeros es = " . ($a + $b) . "</p>" ?>

	<!-- Mi primer condicional -->
	<?php  
	// if ($a < $b) echo "$a es menor que $b";

	// Para validar el nuevo usuario
	 echo $usuario;

	 //ejecicio caculadora

	 if ($_POST["suma"]) echo "suma = ". $a + $b;
	 if ($_POST["resta"]) echo "resta = ". $a - $b;
	 if ($_POST["multi"]) echo "multi = ". $a * $b;
	 if ($_POST["divide"]) echo "divide = ". $a / $b;





?>
<?php include "_footer.php" ?>
