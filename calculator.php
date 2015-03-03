<?php include "_header.php" ?>

 <form action="calculator2.php" method="post">

 		<input type="number" name="numero_1" placeholder="tu numero aqui" /><br>  
 		<input type="number" name="numero_2" placeholder="otro numero" /><br> 

 	
     
    <input type="checkbox" name="suma" value="+" /> +
    <input type="checkbox" name="resta" value="-" />- 
    <input type="checkbox" name="multi" value="*" />* 
    <input type="checkbox" name="divide" value="/" />/<br> 
   	   

   	    <input value="calcular" type="submit" />
		
				
 	
</form>
<?php include "_footer.php" ?>
