<?php
require_once('../Model/class.conexion.php');
require_once('../Model/class.consultas.php');
sleep(2);
$mensaje=null;
$Nom=$_POST['nombre'];
$Emails=$_POST['mail'];

if(strlen($Nom) > 0 && strlen($Emails) > 0){
	$mensaje=$consultas->insertarusuario($Nom,$Emails);

	echo 1; 
}else{

echo 0;

       
}
    
	
	
 ?>
	