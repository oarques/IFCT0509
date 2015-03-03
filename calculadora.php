<?php include "_header.php" ?>


		
				
 	
	
<form method="post" action="calculadora.php" name="calculadora" >
		
	<table border="0" width="100" align="center">
	<!-- esta es la primera fila -->
	<tr>
	<td colspan="4"><input type="text" name="pantalla" id="pantalla"></td>	
		
	</tr>

	<!-- esta es la segunda fila -->
	<tr>
	<td><input type="button" value="7" onclick="pantalla.value+='7'" id="boton"></td>	
	<td><input type="button" value="8" onclick="pantalla.value+='8'" id="boton"></td>	
	<td><input type="button" value="9" onclick="pantalla.value+='9'" id="boton"></td>	
	<td><input type="button" value="+" onclick="pantalla.value+='+'" id="boton"></td>	
	</tr>

	<!-- esta es la tercera fila -->
	<tr>
	<td><input type="button" value="4" onclick="pantalla.value+='4'" id="boton" </td>	
	<td><input type="button" value="5" onclick="pantalla.value+='5'" id="boton" </td>	
	<td><input type="button" value="6" onclick="pantalla.value+='6'" id="boton"</td>	
	<td><input type="button" value="-" onclick="pantalla.value+='-'"id="boton"</td>	
	</tr>

	<!-- esta es la cuarta fila -->
	<tr>
	<td><input type="button" value="1" onclick="pantalla.value+='1'"id="boton"</td>	
	<td><input type="button" value="2" onclick="pantalla.value+='2'"id="boton"</td>	
	<td><input type="button" value="3" onclick="pantalla.value+='3'"id="boton"</td>	
	<td><input type="button" value="X" onclick="pantalla.value+='*'"id="boton"</td>	
	</tr>

	<!-- esta es la quinta fila<! --> 
	<tr>
	<td><input type="button" value="C" onclick="pantalla.value=''"id="boton"</td>	
	<td><input type="button" value="0" onclick="pantalla.value+='0'"id="boton"</td>	
	<td><input type="button" value="=" onclick="pantalla.value=eval(pantalla.value)"id="boton"</td>	
	<td><input type="button" value="/" onclick="pantalla.value+='/'"id="boton"</td>	
	</tr>
	</table>	
</form>


<?php include "_footer.php" ?>
