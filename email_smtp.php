
<?php include "_funciones.php" ?>
<?php include "_header.php" ?>

 <div class="well">

<?php 


 echo multiplicax2(3) . "<br>";
 echo multiplicax2(20). "<br>"; 
 echo multiplica(12, 23). "<br>";
 echo multiplica(3333, 45). "<br>";
 echo nombrecompleto("manol", "vidal") ."<br>";
 


for($o=1 ; $o<=5 ; $o=$o+1){

 	echo " la raiz cuadrada de " . $o . " es " . raizcuadrada($o) . "<br>" ;

}
?>
 </div>

<div class="well">
<?php  
 //sacar un numero al azar que sea mayor o menor que 1000
 $n=azar();

 echo "el numero al azar es " . $n . "<br>";

 
 if($n < 100) {
		echo  $n .  " es mayor que 1000";
}		
 if($n > 100) {
		echo  $n .  " es menor que 1000";
}

?>
</div>

	
<?php include "_footer.php" ?>



