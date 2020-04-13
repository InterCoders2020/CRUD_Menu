<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link href="style.css"
      rel="stylesheet" type="text/css">
</head>
<body>

<div class="img"> </div>

<form action="procesos/insertar.php" method="post">
	<label>Nombre</label>
	<p></p>
	<input type="text" name="txtnombre">
	<p></p>
	<label>Price</label>
	<p></p>
	<input type="text" name="txtprice">
	<p></p>
	<button>Agregar</button>
</form>

<br><br>

<table class="table" style="border-collapse: collapse;" border="5" padding="2px">
	<tr>
		<td>Nombre</td>
		<td>Price</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>
<?php 
	$obj= new metodos();
	$sql="SELECT id,nombre,price from menu_list";
	$datos=$obj->mostrarDatos($sql);

	foreach ($datos as $key ) {
 ?>
	<tr>
		<td><?php echo $key['nombre']; ?></td>
		<td><?php echo $key['price']; ?></td>
		<td>
			<a href="editar.php?id=<?php echo $key['id'] ?>">
			Editar
			</a>
		</td>
		<td>
			<a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">
			eliminar
			</a>
		</td>
	</tr>
<?php 
	}
 ?>

</table>
</body>
</html>