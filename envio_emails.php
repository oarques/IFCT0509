<?php include "_header.php" ?>
<?php include "_funciones_mail.php" ?>
<?php include "_config_email.php" ?>


<?php  
$email = $_POST["email"];
$asunt = $_POST["asunto"];
$cuerpo = $_POST["cuerpo"];



if(isset($_POST["enviar"])){

	//mail($correo, $nombre_remitente, $correo, $nombre_destino, $asunto, $mesaje)

	mailss($email, "oscar", $email, "oscar", $asunt, $cuerpo);
}



?>

 <div class="well col-xs-3  col-xs-offset-4">

<form action="envio_emails.php" method="post"  class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Envio Email</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput"></label>
  <div class="controls">
    <input id="textinput" name="asunto" type="text" placeholder="Asunto" class="input-large">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for=""></label>
  <div class="controls">                     
    <textarea id="" name="cuerpo"></textarea>
  </div>
</div>

<!-- Search input-->
<div class="control-group">
  <label class="control-label" for=""></label>
  <div class="controls">
    <input id="" name="email" type="text" placeholder="Email" class="input-mini search-query">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for=""></label>
  <div class="controls">
    <button id="" name="enviar" class="btn btn-inverse">Enviar</button>
  </div>
</div>

</fieldset>
</form>




 
 </div>


		


<?php include "_footer.php" ?>
