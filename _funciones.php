<?php 

function multiplicax2($numero){
	return $numero * 2;
}
function multiplica($a, $b){
	return $a * $b;
}

function nombrecompleto($nombre, $apellidos){
	return "tu nombre es " . $nombre ." ". $apellidos;
}

function raizcuadrada($numero){
	return  sqrt($numero) ;

}

function azar(){
	return rand(1,1000); 

}
function factorial($x){

	$acu=1;

	for($i=1 ; $i<=$x ; $i=$i+1){

		$acu=$acu*$i;
		
	}
	return $acu;
}


?>