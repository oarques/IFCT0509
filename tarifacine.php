
<?php 

//traformamos edad en una variable de php
$edad = $_POST["edad"];

//si le damos a submit ejecuatame la conducion
if(isset($_POST["submit"])) {

	if($edad <=12) {
		echo $resutado = "tarifa de adulto gratis";
	}
	if($edad >=13 && $edad<=16)	{
		echo $resutado = "tarifa de adulto 4€";
	}
	if($edad >=17 && $edad<=65) {
		echo $resutado = "tarifa de adulto 8€";
	}	
	if($edad > 65) {
		echo $resutado = "tarifa de adulto 4€";	

    }
	else{}
	}
	


		



	





 ?>




<?php include "_header.php" ?>

<div class="well tex-center ">tarifacine
		<div class="row col-sm-offset-6"></div>	

		    <form action="tarifacine.php" method="post">

		 	  <input type="number" name="edad" />

				<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0015.gif" alt="dados">


		 	  <input name="submit" type="submit" value="pagar" class="btn-danger " />

	      </form>
	 		<!-- para que salga fuera del formulario, recordar que hay que abrir la llave php y el ; -->
</div>	 		
		

<?php 	
	 			echo $resultado;
	 		 ?>    
<?php include "_footer.php" ?>
