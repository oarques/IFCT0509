<?php include "_header.php" ?>

<div class="well text-center"><h1>Poker<h1></div>
		<div class="row">
			
			<div class="col-xs-6 col-xs-offset-4" id="tablas3" ></div>
				<div class="well"id="tablas1"></div>	
		</div>


 <div class="row  text-center"><h2>Cartas<h2></div>
   	<form action="Poker.php" method="post">
     
     <div class="row">
     		
		<div class="thumbnail col-xs-6 col-xs-offset-3">
					       <?php 
					        if (isset($_POST["parar_A"])){
					        echo $imagen1;
					        echo $imagen2;
					        echo "<b>Resultado = " . ($d1 + $d2) . "</b>";
					        
					        }
					        if (isset($_POST["girar_A"])){
					        echo $dado;
					        }
					         if (isset($_POST["parar_B"])){
					        echo $dado;
					        }
					        if (isset($_POST["girar_B"])){
					        echo $dado;
					        }
	

					        ?>
			</div>
					        	
					        	<input name="girar_A" type="submit" value="Play" class="bnt btn-success" role="button" />
					        	<input name="parar_A" type="submit" value="Stop" class="bnt btn-primary" role="button" />


	

<?php include "_footer.php" ?>
