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

//arry //para que salga el nombre de las cartas en letras
$cartas = ["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
$palos = ["picas","treboles","diamantes","corazones"];
}

//para que no me salgan iguales(si la imagen 1 coincide con la imagen 2 que las vuelva a varajar) y repita todo el proceso
while($imagen1==$imagen2){
	$c1=rand(1,13);
	$p1=rand(1,4);

	$c2=rand(1,13);
	$p2=rand(1,4);

	$imagen1= "img/" . $c1 . "_" . $p1 . ".jpg" ;
	$imagen2= "img/" . $c2 . "_" . $p2 . ".jpg" ;


}

if($c1==1 && $c2==1){
	$nMano="img/a_a.png"
} 	 
elseif

	





 ?>
<?php include "_header.php" ?>

<div class="well text-center"><h1>Poker<h1></div>
		


 <div class="text-center"><h2>Cartas<h2></div>
   	<form action="Poker.php" method="post">
     
     
     		
		<div class="row">	
			<div class="col-xs-6 col-xs-offset-3" id="tablas3"><h4>Resultado<h4>	
				<div class="well" id="tablas4">
				
				 <img src="<?php echo $imagen1; ?> " >
				
				 <img src="<?php echo $imagen2; ?> " >
				</div>
			<div class="col-xs-8 col-xs-offset-2" id="tablas3">	
				<?php echo $cartas[$c1-1] . " de " . $palos[$p1-1] . "  y  " . $cartas[$c2-1] . " de " . $palos[$p2-1] ; ?>
		   </div>		  
			<div class="col-xs-6 col-xs-offset-3" >
				<img src="<?php  echo $nMano; ?>" >

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
