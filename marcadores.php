<?php 
	
$servidor = "localhost";
$usuario = "root";
$passw = "servidor-2";

$basededatos = "marcadores";





/**
 *  comenzar conexion
 */	
			             //servidor,usuario,password
$conexion = mysql_connect($servidor, $usuario, $passw);


//si no hay conexion que salga no se ha podido conectar a mysql
//fallo de conexion
if(!$conexion){ 
	die("No se ha podido conectar: " . mysql_error());
}
else{
    echo "Te has conectado a la Base de Datos";
}





/**
 *  Crear Tablas en Base de datos
 */

// //1.- seleccionar la base datos
mysql_select_db($basededatos, $conexion);

// 2. Prepara comando
$sql = "CREATE TABLE Agenda
	(
	 personaID int NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY(personaID),
	 Nombre varchar(15),
	 Apellido varchar(15),
	 Edad int,
	 Telefono int 
	)";
	
// 3.- ejecutar la query
mysql_query($sql, $conexion);

 /**
 *  Crear una Base de Datos
 */

//crear Base de datos con una function
function crearBaseDatos(){

	if(mysql_query("CREATE DATABASE primeraBase", $conexion)){
		echo "Se ha creado la Base de Datos";
	}
	else{
		echo "No se ha podido crear la Base de datos por el siguiente error:" . mysql_error();
	}
}

/**
 *  terminar conexion
 */
 mysql_close($conexion);



 ?>
