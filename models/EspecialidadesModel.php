<?php
	
	class Especialidades_model {
		
		private $db;
		private $especialidades;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->especialidades = array();
		}
		
		public function get_especialidades()
		{
			$sql = "SELECT id_especialidad, nombre_especialidad FROM especialidades";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->especialidades[] = $row;
			}
			return $this->especialidades;
		}
		
		public function insertar($nombre_especialidad){
			
			$resultado = $this->db->query("INSERT INTO especialidades (nombre_especialidad) VALUES ('$nombre_especialidad')");
			
		}
		
		public function modificar($id_especialidad, $nombre_especialidad){
			
			$resultado = $this->db->query("UPDATE especialidades SET nombre_especialidad='$nombre_especialidad' WHERE id_especialidad = '$id_especialidad'");			
		}
		
		public function eliminar($id_especialidad){
			
			$resultado = $this->db->query("DELETE FROM especialidades WHERE id_especialidad = '$id_especialidad'");
			
		}
		
		public function get_especialidad($id_especialidad)
		{
			$sql = "SELECT *FROM especialidades WHERE id_especialidad = '$id_especialidad'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>