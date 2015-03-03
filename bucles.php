				
		<?php 

			

		if(isset($_POST["multi"])) {

				 $a = $_POST["tabla"];
		}



		 ?>	

<?php  

// for($i=1 ; $i<=10 ; $i=$i+1){
	
// echo "hace $i veces que paso por aqui <br>" ;
 
 


// echo "<h1>La tabla del 7 es:<h1>" ;

// for($i=1 ; $i<=10 ; $i=$i+1){

// echo $i . " x 7 = "  . $i * 7 . "<br>" ; 

// }
// echo "<h1>La tabla del 8 es:<h1>" ;

// for($i=1 ; $i<=10 ; $i=$i+1){

// echo $i . " x 8 = "  . $i * 8 . "<br>" ; 

// }

?>
<?php include "_header.php" ?>

	<div class="well text-center"><h1>Tablas de Multiplicar<h1></div>
		<div class="row">
			<!-- tabla del 1 -->
			<div class="col-xs-2 col-xs-offset-1" id="tablas3" ><h4>La tabla del 1<h4>
				<div class="well"id="tablas1">	
				 <?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 1 = "  . $i * 1 . "<br>" ;  } ?>


				</div>
			</div>
			<!-- tabla del 2 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 2<h4>	
				<div class="well" id="tablas1">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 2 = "  . $i * 2 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 3 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 3<h4>	
				<div class="well"id="tablas1">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 3 = "  . $i * 3 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 4 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 4<h4>	
				<div class="well"id="tablas1">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 4 = "  . $i * 4 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 5 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 5<h4>	
				<div class="well"id="tablas1">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 5 = "  . $i * 5 . "<br>" ;  } ?>
	
			
				</div>
			</div>

		</div>
		<div class="row">
			<!-- tabla del 6 -->
			<div class="col-xs-2 col-xs-offset-1"id="tablas3"><h4>La tabla del 6<h4>	
				<div class="well" id="tablas2">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 6 = "  . $i * 6 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 7 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 7<h4>	
				<div class="well" id="tablas2">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 7 = "  . $i * 7 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 8 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 8<h4>	
				<div class="well" id="tablas2">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 8 = "  . $i * 8 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 9 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 9<h4>	
				<div class="well" id="tablas2">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 9 = "  . $i * 9 . "<br>" ;  } ?>
	
			
				</div>
			</div>
			<!-- tabla del 10 -->
			<div class="col-xs-2" id="tablas3"><h4>La tabla del 10<h4>	
				<div class="well" id="tablas2">
				<?php for($i=1 ; $i<=10 ; $i=$i+1){ echo $i . " x 10 = "  . $i * 10  . "<br>" ;  } ?>
	
				
				</div>
			</div>

			
			

		</div>
					
			
</div>

		<div class="well text-center"><h1>Encuentra la tabla<h1></div>

		
		<div class="row">	
			<div class="col-xs-2 col-xs-offset-5" id="tablas3"><h4>Resultado<h4>	
				<div class="well" id="tablas4">
				<?php 	
                     for($i=1 ; $i<=10 ; $i=$i+1) { echo $i . " x $a = "  . $i * $a  . "<br>" ; 	
				} ?>
				</div>
			</div>
		</div>

	


		<form action="bucles.php" method="post">

		<div class="text-center">	
				<input type="number" name="tabla" placeholder="tu numero aqui" /><br>

				<input type="submit" name="multi" value="Tabla" id="tablas3">

		</div>






		</form>





	










<?php include "_footer.php" ?>