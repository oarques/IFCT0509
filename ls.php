<?php include "_header.php"?>

		<div class="col-md-5">
			<pre> <?php echo exec("pwd") ?> </pre>
			<pre>		<?php
							 echo exec("pwd");
							 $salida = shell_exec("ls -la");
							 echo $salida;
						?>
			</pre>				 	
       </div>

<?php include "_footer.php"?>
