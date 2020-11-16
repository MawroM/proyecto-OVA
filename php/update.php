<?php


//conectamos Con el servidor
$host ="localhost";
$user ="root";
$pass ="";
$db="api_rest";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

$identificacion=$_POST['IDENTIFICACION3'];
$tipo=$_POST['Tipo3'];
$nombre=$_POST['Nombre3'];
$apellido=$_POST['Apellido3'];
$asunto=$_POST['Asunto3'];
$descripcion=$_POST['Descripcion3'];
 //hacemos la sentencia de sql
 $sql="UPDATE usuarios SET IDENTIFICACION='$identificacion',Tipo='$tipo',Nombre='$nombre',Apellido='$apellido',Asunto='$asunto',Descripcion='$descripcion' WHERE IDENTIFICACION = '$identificacion'";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='http://localhost:8080/api'>Volver</a>";
 }
?>