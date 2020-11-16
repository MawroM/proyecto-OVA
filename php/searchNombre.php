<?php
//conectamos Con el servidor
$host ="localhost";
$user ="root";
$pass ="";
$db="api_rest";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

$nombre=$_POST['Nombre3'];
 //hacemos la sentencia de sql
 $sql="SELECT Nombre,Apellido,Asunto,Descripcion FROM usuarios WHERE Nombre =('$nombre')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 
 $mostrar=mysqli_fetch_array($ejecutar);
    echo "<br>";
    echo "<hr>";
  echo $mostrar['Nombre'];
  echo "<div>";
  echo $mostrar['Apellido'];
  echo "<div>";
  echo $mostrar['Asunto'];
  echo "<div>";
  echo $mostrar['Descripcion'];
  echo "<div>";
 
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"<br><br>Datos Leidos Correctamente<br><a href='http://localhost:8080/api'>Volver</a>";
 }
?>