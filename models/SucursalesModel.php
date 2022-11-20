<?php
	
	class Sucursales_model {
		
		private $db;
		private $sucursales;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->sucursales = array();
		}
		
		public function get_sucursales()
		{
			$sql = "SELECT id_sucursal, nombre_sucursal, direccion_sucursal FROM sucursales";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->sucursales[] = $row;
			}
			return $this->sucursales;
		}
		
		public function insertar($nombre_sucursal, $direccion_sucursal){
			
			$resultado = $this->db->query("INSERT INTO sucursales (nombre_sucursal, direccion_sucursal) VALUES ('$nombre_sucursal', '$direccion_sucursal')");
			
		}
		
		public function modificar($id_sucursal, $nombre_sucursal, $direccion_sucursal){
			
			$resultado = $this->db->query("UPDATE sucursales SET nombre_sucursal='$nombre_sucursal', direccion_sucursal='$direccion_sucursal' WHERE id_sucursal = '$id_sucursal'");			
		}
		
		public function eliminar($id_sucursal){
			
			$resultado = $this->db->query("DELETE FROM sucursales WHERE id_sucursal = '$id_sucursal'");
			
		}
		
		public function get_sucursal($id_sucursal)
		{
			$sql = "SELECT *FROM sucursales WHERE id_sucursal = '$id_sucursal'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>