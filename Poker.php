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

if(isset($_POST["flop"])){


	$c1=rand(1,13);
	$p1=rand(1,4);


	$c2=rand(1,13);
	$p2=rand(1,4);

	$c3=rand(1,13);
	$p3=rand(1,4);
				
	$imagen4= "img/" . $c1 . "_" . $p1 . ".jpg" ;
	$imagen5= "img/" . $c2 . "_" . $p2 . ".jpg" ; 
	$imagen6= "img/" . $c3 . "_" . $p3 . ".jpg" ;
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
	$nMano="img/a_a.png" ;
} 	
elseif(($c1==1 && $c2==8) or ($c1==8 && $c2==1)) {
	$nMano="img/a_8.png" ;
}	
elseif($c1==1 && $c2==1){
	$nMano="img/a_a.png" ;
}
elseif(($c1==6 && $c2==9) or ($c1==9 && $c2==6)) {
	$nMano="img/6_9.png" ;
}
elseif($c1==2 && $c2==2){
	$nMano="img/2_2.png" ;
}
elseif($c1==11 && $c2==11){
	$nMano="img/j_j.png" ;
}


 ?>
<?php include "_header.php" ?>
<div class="row">
	<div class="well text-center"><h1>Poker<h1></div>
		


 	<div class="text-center"><h2>Cartas<h2></div>
</div>
   	<form action="Poker.php" method="post">
     
     
     		
		<div class="row">	
			<div class="col-xs-6 col-xs-offset-3" id="tablas3"><h4>Resultado<h4>	
				<div class="well" id="tablas4">
				
				 <img src="<?php echo $imagen1; ?> " >
				
				 <img src="<?php echo $imagen2; ?> " >
				</div>
			<div class="col-md-8 col-xs-offset-2" id="tablas3">	
				<?php echo $cartas[$c1-1] . " de " . $palos[$p1-1] . "  y  " . $cartas[$c2-1] . " de " . $palos[$p2-1] ; ?>
		   </div>		  
			<div class="col-xs-6 col-xs-offset-3" >
				<img src="<?php  echo $nMano; ?>" >
			</div>
			</div>
		</div>
		<div class="row">
			
				<div class=" well col-xs-6 col-xs-offset-3" >
					<img src="<?php echo $imagen4; ?> " >
				
					 <img src="<?php echo $imagen5; ?> " > 

				 	<img src="<?php echo $imagen6; ?> " >
				</div>
		</div>	

			
		

				
			</div>
		</div>

	


		<form action="Poker.php" method="post">

		<div class="text-center">	
				

				<input type="submit" name="dar" value="Dar" id="tablas3"> 
				<input type="submit" name="varagar" value="varagar" id="tablas3">
				<input type="submit" name="flop" value="flop" id="tablas3">

		</div>






		</form>


<?php include "_footer.php" ?>
