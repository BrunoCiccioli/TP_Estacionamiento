<?php
include 'accesoadatos.php';



$miObjeto = new stdClass();
//var_dump("hola"); die();
$miObjeto->nombre = $_GET['nombre'];
//var_dump("hola"); die();
$miObjeto->contraseña = $_GET['contraseña'];
//var_dump("hola"); die();


    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	//var_dump("hola"); die();

	$consulta =$objetoAccesoDato->RetornarConsulta("select nombre from usuario");
	//var_dump("hola"); die();
	$consulta->execute();
	//var_dump("hola"); die();			
	$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	//var_dump("hola"); die();
	foreach ($datos as $usuario) 
		{
			if($usuario["nombre"]==$miObjeto->nombre)
			{
				header("Location: ../paginas/usuarioyaregistrado.php");
		        exit();
			}
			
		}

if(isset($datos[0]['nombre']))
	{
	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$select="INSERT INTO usuario( nombre, clave) VALUES ('$miObjeto->nombre','$miObjeto->contraseña')";
	$consulta =$objetoAccesoDato->RetornarConsulta($select);
	$consulta->execute();
}
header("Location: ../paginas/ok.php");
	
        
        

//$archivo = fopen('../archivos/registro.txt', 'a');
//fwrite($archivo, json_encode($miObjeto)."\n");
//header("Location: ../paginas/ok.php");
//fclose($archivo);

?>