<?php 

	$a = $_POST["a"];
	$b = $_POST["b"];

	if(isset($_POST["suma"])) {
		$resultado = "La suma es: " . $a+$b;
	}

	//cuando le demos a borrar nos de 1
	if(isset($_POST["borrar"])) {
		$a = 1;
		$b = 1;
	}

	//calcular el coseno
    if(isset($_POST["coseno"])){
    	$resultado = "el coseno es:" . cos($a);
    }



	

?>


<?php include "_header.php" ?>

 <form action="calculator2.php" method="post">

 		<input type="number" name="a" placeholder="<?php  echo $a; ?>" /><br>  
 		<input type="number" name="b" placeholder="<?php  echo $b; ?>" /><br>  
 		

 	
     
     
   	   

   	    <input name="suma" type="submit" value="suma" />
   	    <input name="borrar" type="submit" value="borrar" />
   	    <input name="coseno" type="submit" value="coseno" />
		
				
 	
</form>


<h4><?php  echo $resultado; ?> </h4>






<?php include "_footer.php" ?>
