<?php
	
	class Doctores_model {
		
		private $db;
		private $doctores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->doctores = array();
		}
		
		public function get_doctores()
		{
			$sql = "SELECT  d.id_doctor, d.nombre_doctor, d.id_especialidad, e.nombre_especialidad, d.id_sucursal, s.nombre_sucursal FROM doctores AS d INNER JOIN especialidades AS e ON d.id_especialidad = e.id_especialidad INNER JOIN sucursales AS s ON d.id_sucursal = s. id_sucursal ORDER BY d.nombre_doctor;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->doctores[] = $row;
			}
			return $this->doctores;
		}
		
		public function insertar($nombre_doctor, $id_especialidad, $id_sucursal){
			
			$resultado = $this->db->query("INSERT INTO doctores (nombre_doctor, id_especialidad, id_sucursal) VALUES ('$nombre_doctor', '$id_especialidad', '$id_sucursal')");
			
		}
		
		public function modificar($id_doctor, $nombre_doctor, $id_especialidad, $id_sucursal){
			
			$resultado = $this->db->query("UPDATE doctores SET nombre_doctor='$nombre_doctor', id_especialidad='$id_especialidad', id_sucursal='$id_sucursal' WHERE id_doctor = '$id_doctor'");			
		}
		
		public function eliminar($id_doctor){
			
			$resultado = $this->db->query("DELETE FROM doctores WHERE id_doctor = '$id_doctor'");
			
		}
		
		public function get_doctor($id_doctor)
		{
			$sql = "SELECT  d.id_doctor, d.nombre_doctor, d.id_especialidad, e.nombre_especialidad, d.id_sucursal, s.nombre_sucursal FROM doctores AS d INNER JOIN especialidades AS e ON d.id_especialidad = e.id_especialidad INNER JOIN sucursales AS s ON d.id_sucursal = s. id_sucursal WHERE id_doctor = '$id_doctor'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>