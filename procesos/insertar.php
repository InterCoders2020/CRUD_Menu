<?php 
use App\Menu;
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['txtnombre'];
	$price=$_POST['txtprice'];

	$datos=array(
			$nombre,
			$price
				);
	$obj= new metodos();
	if($obj->insertarDatosNombre($datos)==1){
		header("location:../index.php");
	}

 ?>