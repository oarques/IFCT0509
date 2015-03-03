<?php include "_header.php" ?>

	<div class="well">procesa</div>

	<pre>
		<?php
			print_r($_POST);
	
			$password = $_POST["userPassword"];

			echo "Tu nombre es: " . $_POST["userName"] . "<br> ";

		$hoy = date("H:i:s"); 

		echo $hoy
		?>	

	</pre>		
	

<?php include "_footer.php" ?>