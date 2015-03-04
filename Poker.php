<?php 
if(isset($_POST["varagar"])){
$imagen1= "img/dorso.jpg" ; 
$imagen2= "img/dorso.jpg" ;
}

if(isset($_POST["dar"])){

$c1=rand(1,13);
$p1=rand(1,4);

$c2=rand(1,13);
$p2=rand(1,4);


$imagen1= "img/" . $c1 . "_" . $p1 . ".jpg" ;
$imagen2= "img/" . $c2 . "_" . $p2 . ".jpg" ;


$cartas = ["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
$palos = ["picas","treboles","diamantes","corazones"];
}

 ?>
<?php include "_header.php" ?>

<div class="well text-center"><h1>Poker<h1></div>
		


 <div class="text-center"><h2>Cartas<h2></div>
   	<form action="Poker.php" method="post">
     
     
     		
		<div class="row">	
			<div class="col-xs-4 col-xs-offset-4" id="tablas3"><h4>Resultado<h4>	
				<div class="well" id="tablas4">
				<h5><?php echo $cartas[$c1-1] . " de " . $palos[$p1-1]; ?></h5>
				 <img src="<?php echo $imagen1; ?> " >
				<h5><?php echo $cartas[$c2-1] . " de " . $palos[$p2-1]; ?></h5>
				 <img src="<?php echo $imagen2; ?> " >
				 	
                          
					  
				</div>
			</div>
		</div>

	


		<form action="Poker.php" method="post">

		<div class="text-center">	
				

				<input type="submit" name="dar" value="Dar" id="tablas3"> 
				<input type="submit" name="varagar" value="varagar" id="tablas3">

		</div>






		</form>


<?php include "_footer.php" ?>
