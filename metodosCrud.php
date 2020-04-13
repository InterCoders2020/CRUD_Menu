<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into menu_list (nombre,price)
							values ('$datos[0]','$datos[1]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE menu_list set nombre='$datos[0]',
										price='$datos[1]'
								where id='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from menu_list where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>