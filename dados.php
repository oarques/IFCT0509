<?php 

$dado = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0015.gif">' ;

// si le apreto a girar quiero que me saque la imagen siguiente
if(isset($_POST["girar_A"])){
	 $dado = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0015.gif">' ;

}
if(isset($_POST["parar_A"])){
	 //$dado = '<img src="http://grabilla.com/0521a-68128a10-4e75-41d4-af3c-7dbaeeef0ecc.png">' ;
	 // variables de los numeros aleatorios del dado del computer
	 $d1=rand(1,6);
	 $d2=rand(1,6);
}

if(isset($_POST["girar_B"])){
	 $dado = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0015.gif">' ;
}
if(isset($_POST["parar_B"])){
	 //$dado = '<img src="http://grabilla.com/0521a-df92e877-e478-4cca-b9d3-2affd8c08d30.png">' ;
	 $d3=rand(1,6);
	 $d4=rand(1,6);
}



// imagenes de dado computer
if($d1==1){
	$imagen1 = '<img src="http://grabilla.com/0521a-aaa5d080-2123-447e-8ad4-ce179bdb151d.png">' ;
}
elseif($d1==2){
	$imagen1 = '<img src="http://grabilla.com/0521a-d62f2a9e-05c2-4aa8-a7a0-aa59cf2fcf80.png">' ;
}
elseif($d1==3){
	$imagen1 = '<img src="http://grabilla.com/0521a-ea6c94d4-caac-46d1-bf0f-233364d8f606.png">' ;
}
elseif($d1==4){
	$imagen1 = '<img src="http://grabilla.com/0521a-68128a10-4e75-41d4-af3c-7dbaeeef0ecc.png">' ;
}
elseif($d1==5){
	$imagen1 = '<img src="http://grabilla.com/0521a-df92e877-e478-4cca-b9d3-2affd8c08d30.png">' ;
}
elseif($d1==6){
	$imagen1 = '<img src="http://grabilla.com/0521a-d469699a-7e2c-4598-98e5-4b96874a3736.png">' ;
}

if($d2==1){
	$imagen2 = '<img src="http://grabilla.com/0521a-aaa5d080-2123-447e-8ad4-ce179bdb151d.png">' ;
}
elseif($d2==2){
	$imagen2 = '<img src="http://grabilla.com/0521a-d62f2a9e-05c2-4aa8-a7a0-aa59cf2fcf80.png">' ;
}
elseif($d2==3){
	$imagen2 = '<img src="http://grabilla.com/0521a-ea6c94d4-caac-46d1-bf0f-233364d8f606.png">' ;
}
elseif($d2==4){
	$imagen2 = '<img src="http://grabilla.com/0521a-68128a10-4e75-41d4-af3c-7dbaeeef0ecc.png">' ;
}
elseif($d2==5){
	$imagen2 = '<img src="http://grabilla.com/0521a-df92e877-e478-4cca-b9d3-2affd8c08d30.png">' ;
}
elseif($d2==6){
	$imagen2 = '<img src="http://grabilla.com/0521a-d469699a-7e2c-4598-98e5-4b96874a3736.png">' ;
}

//+imagenes de los dados yo

if($d3==1){
	$imagen3 = '<img src="http://grabilla.com/0521a-aaa5d080-2123-447e-8ad4-ce179bdb151d.png">' ;
}
elseif($d3==2){
	$imagen3 = '<img src="http://grabilla.com/0521a-d62f2a9e-05c2-4aa8-a7a0-aa59cf2fcf80.png">' ;
}
elseif($d3==3){
	$imagen3 = '<img src="http://grabilla.com/0521a-ea6c94d4-caac-46d1-bf0f-233364d8f606.png">' ;
}
elseif($d3==4){
	$imagen3 = '<img src="http://grabilla.com/0521a-68128a10-4e75-41d4-af3c-7dbaeeef0ecc.png">' ;
}
elseif($d3==5){
	$imagen3 = '<img src="http://grabilla.com/0521a-df92e877-e478-4cca-b9d3-2affd8c08d30.png">' ;
}
elseif($d3==6){
	$imagen3 = '<img src="http://grabilla.com/0521a-d469699a-7e2c-4598-98e5-4b96874a3736.png">' ;
}

if($d4==1){
	$imagen4 = '<img src="http://grabilla.com/0521a-aaa5d080-2123-447e-8ad4-ce179bdb151d.png">' ;
}
elseif($d4==2){
	$imagen4 = '<img src="http://grabilla.com/0521a-d62f2a9e-05c2-4aa8-a7a0-aa59cf2fcf80.png">' ;
}
elseif($d4==3){
	$imagen4 = '<img src="http://grabilla.com/0521a-ea6c94d4-caac-46d1-bf0f-233364d8f606.png">' ;
}
elseif($d4==4){
	$imagen4 = '<img src="http://grabilla.com/0521a-68128a10-4e75-41d4-af3c-7dbaeeef0ecc.png">' ;
}
elseif($d4==5){
	$imagen4 = '<img src="http://grabilla.com/0521a-df92e877-e478-4cca-b9d3-2affd8c08d30.png">' ;
}
elseif($d4==6){
	$imagen4 = '<img src="http://grabilla.com/0521a-d469699a-7e2c-4598-98e5-4b96874a3736.png">' ;
}





 ?>





<?php include "_header.php" ?>

 <div class="row  text-center"><h2>Dados<h2></div>
   	<form action="dados.php" method="post">
     
     <div class="row">
     	<div class="col-xs-6">
  					<p><h4>Computer<h4><p>	

		<div class="thumbnail ">
					       <?php 
					        if (isset($_POST["parar_A"])){
					        echo $imagen1;
					        echo $imagen2;
					        echo "<b>Resultado = " . ($d1 + $d2) . "</b>";
					        
					        }
					        if (isset($_POST["girar_A"])){
					        echo $dado;
					        }
					         if (isset($_POST["parar_B"])){
					        echo $dado;
					        }
					        if (isset($_POST["girar_B"])){
					        echo $dado;
					        }
	

					        ?>
			<div class="caption">
					        	
					        	<input name="girar_A" type="submit" value="Play" class="bnt btn-success" role="button" />
					        	<input name="parar_A" type="submit" value="Stop" class="bnt btn-primary" role="button" />
						          
			</div>

		</div>
  		

  		</div>

  			<div class="col-xs-6">
					<p><h4>Yo<h4><p>

		<div class="thumbnail ">
							<?php 
					        if (isset($_POST["parar_B"])){
					        echo $imagen3;
					        echo $imagen4;
					        echo "<p>Resultado = " . ($d3 + $d4) . "</p>";
					        }
					        if (isset($_POST["girar_B"])){
					        echo $dado;
					        }
							if (isset($_POST["parar_A"])){
					        echo $dado;
					        }
					        if (isset($_POST["girar_A"])){
					        echo $dado;
					        }

					        ?>
					       
			<div class="caption">
					        
					          <input name="girar_B" type="submit" value="Play" class="bnt btn-success" role="button" />
					          <input name="parar_B" type="submit" value="Stop" class="bnt btn-primary" role="button" />
						          
			</div>
		


		</div>
  		</div>



  					
  	</div>     
      
     
   		
   	  
 
	</div>  
            
        

        

        	


            
        </form> 
         
    </div>   

<?php include "_footer.php" ?>
