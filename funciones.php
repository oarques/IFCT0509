<?php 

// raizcuadrada es el nombre que ejecuata la funcion que hay que  
function raizcuadrada($numero){
	return  sqrt($numero) ;
}


function multiplicax2($numero){
	return $numero * 2;
}
function multiplica($a, $b){
	return $a * $b;
}

function nombrecompleto($nombre, $apellidos){
	return "tu nombre es " . $nombre . " " . $apellidos;
}

for($i=0 ; $i<=100 ; $i=$i+1){

	echo $i . "x2 = "  . multiplicax2($i) . "<br>";
}

 for($o=1 ; $o<=100 ; $o=$o+1){

 	echo " la raiz cuadrada de " . $o . " es " . raizcuadrada($o) . "<br>" ;
}



function azar(){
	return rand(1,1000); 

}

$n=azar();

 echo "el numero al azar es" . $n . "<br>";

 
 if($n < 100) {
		echo  $n .  " es mayor que 1000";
}		
 if($n > 100) {
		echo  $n .  " es menor que 1000" . "<br>";
}		


function factorial($x){

	$acu=1;

	for($i=1 ; $i<=$x ; $i=$i+1){

		$acu=$acu*$i;
		
	}
	return $acu;
}




echo "el factorial es" . factorial(15) . "<br>";	




	








 
 echo multiplicax2(3) . "<br>";
 echo multiplicax2(20). "<br>"; 
 echo multiplica(12, 23). "<br>";
 echo multiplica(3333, 45). "<br>";
 echo nombrecompleto("manol", "vidal");

 

?>
