<?php
	
	class Examenes_model {
		
		private $db;
		private $examenes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->examenes = array();
		}
		
		public function get_examenes()
		{
			$sql = "SELECT *FROM examenes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->examenes[] = $row;
			}
			return $this->examenes;
		}
		
		public function insertar($nombre_examen){
			
			$resultado = $this->db->query("INSERT INTO examenes (nombre_examen) VALUES ('$nombre_examen')");
			
		}
		
		public function modificar($id_examen, $nombre_examen){
			
			$resultado = $this->db->query("UPDATE examenes SET nombre_examen='$nombre_examen' WHERE id_examen = '$id_examen'");			
		}
		
		public function eliminar($id_examen){
			
			$resultado = $this->db->query("DELETE FROM examenes WHERE id_examen = '$id_examen'");
			
		}
		
		public function get_examen($id_examen)
		{
			$sql = "SELECT *FROM examenes WHERE id_examen = '$id_examen'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>