<?php 
use App\Menu;
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['txtnombre'];
	$price=$_POST['txtprice'];
	$id=$_POST['id'];

	$datos=array(
			$nombre,
			$price,
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}
 ?>