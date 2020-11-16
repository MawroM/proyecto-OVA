
<?php
//conectamos Con el servidor
$host ="localhost";
$user ="root";
$pass ="";
$db="api_rest";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

$identificacion=$_POST['IDENTIFICACION'];
$tipo=$_POST['Tipo'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$asunto=$_POST['Asunto'];
$descripcion=$_POST['Descripcion'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO usuarios VALUES('$identificacion','$tipo','$nombre','$apellido','$asunto','$descripcion')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='http://localhost:8080/api'>Volver</a>";
 }
?>
