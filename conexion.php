<?php
$User       = 'root';
$Password   = '';
$Host       = 'localhost';
$Database   = 'viajes';
//define( 'BASE_PATH', '');//Ruta base donde se encuentra
define( 'DB_HOST',"$Host");//Servidor de la base de datos
define( 'DB_USERNAME',"$User");//Usuario de la base de datos
define( 'DB_PASSWORD',"$Password");//Contrase�a de la base de datos
define( 'DB_NAME', "$Database");//Nombre de la base de datos

$con=@mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexi�n fall�: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>