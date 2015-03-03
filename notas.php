<?php 

//traformamos edad en una variable de php
$notas = $_POST["notas"];

//si le damos a submit ejecuatame la conducion
if(isset($_POST["submit"])) {

	if($notas <=2) {
		echo $resutado = "MD";
	}
	elseif($notas ==3)	{
		echo $resutado = "D";
	}
	elseif($notas ==4) {
		echo $resutado = "I";
	}	
	elseif($notas ==5) {
		echo $resutado = "S";	

    }elseif($notas ==6) {
		echo $resutado = "B";
	

    }elseif($notas ==7){
		echo $resutado = "N";
	}elseif($notas ==8){
		echo $resutado = "N";


	

    }elseif($notas ==9) {
		echo $resutado = "SB";
	}elseif($notas ==10) {
		echo $resutado = "SB";



    }
	else{}
	}
	


		



	





 ?>




<?php include "_header.php" ?>

<div class="well tex-center ">calificacion
		<div class="row col-sm-offset-6"></div>	

		    <form action="notas.php" method="post">

		 	  <input type="number" name="notas" />




		 	  <input name="submit" type="submit" value="nota" class="btn-warnig " />

	      </form>
	 		<!-- para que salga fuera del formulario, recordar que hay que abrir la llave php y el ; -->
</div>	 		
		

<?php 	
	 			echo $resultado;
	 		 ?>    
<?php include "_footer.php" ?>

