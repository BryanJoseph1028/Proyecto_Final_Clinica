<?php
	
	class Habitaciones_model {
		
		private $db;
		private $habitaciones;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->habitaciones = array();
		}
		
		public function get_habitaciones()
		{
			$sql = "SELECT  d.id_habitacion, d.nombre_habitacion, d.id_sucursal, s.nombre_sucursal, d.disponible FROM habitaciones AS d  INNER JOIN sucursales AS s ON d.id_sucursal = s. id_sucursal ORDER BY d.nombre_habitacion;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->habitaciones[] = $row;
			}
			return $this->habitaciones;
		}
		
		public function insertar($nombre_habitacion, $id_sucursal){
			
			$resultado = $this->db->query("INSERT INTO habitaciones (nombre_habitacion, id_sucursal) VALUES ('$nombre_habitacion', '$id_sucursal')");
			
		}
		
		public function modificar($id_habitacion, $nombre_habitacion, $id_sucursal){
			
			$resultado = $this->db->query("UPDATE habitaciones SET nombre_habitacion='$nombre_habitacion', id_sucursal='$id_sucursal' WHERE id_habitacion = '$id_habitacion'");			
		}
		
		public function eliminar($id_habitacion){
			
			$resultado = $this->db->query("DELETE FROM habitaciones WHERE id_habitacion = '$id_habitacion'");
			
		}
		
		public function get_habitacion($id_habitacion)
		{
			$sql = "SELECT  d.id_habitacion, d.nombre_habitacion, d.id_sucursal, s.nombre_sucursal FROM habitaciones AS d INNER JOIN sucursales AS s ON d.id_sucursal = s. id_sucursal WHERE id_habitacion = '$id_habitacion'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>