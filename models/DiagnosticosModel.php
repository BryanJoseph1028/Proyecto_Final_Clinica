<?php
	
	class Diagnosticos_model {
		
		private $db;
		private $diagnosticos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->diagnosticos = array();
		}
		
		public function get_diagnosticos()
		{
			$sql = "SELECT *FROM diagnosticos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->diagnosticos[] = $row;
			}
			return $this->diagnosticos;
		}
		
		public function insertar($diagnostico){
			
			$resultado = $this->db->query("INSERT INTO diagnosticos (diagnostico) VALUES ('$diagnostico')");
			
		}
		
		public function modificar($id_diagnostico, $diagnostico){
			
			$resultado = $this->db->query("UPDATE diagnosticos SET diagnostico='$diagnostico' WHERE id_diagnostico = '$id_diagnostico'");			
		}
		
		public function eliminar($id_diagnostico){
			
			$resultado = $this->db->query("DELETE FROM diagnosticos WHERE id_diagnostico = '$id_diagnostico'");
			
		}
		
		public function get_diagnostico($id_diagnostico)
		{
			$sql = "SELECT *FROM diagnosticos WHERE id_diagnostico = '$id_diagnostico'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>