<?php
	
	class Pacientes_model {
		
		private $db;
		private $pacientes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->pacientes = array();
		}
		
		public function get_pacientes()
		{
			$sql = "SELECT  *FROM pacientes;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->pacientes[] = $row;
			}
			return $this->pacientes;
		}
		
		public function insertar($nombre_paciente, $apellido_paciente, $direccion_paciente, $telefono_paciente){
			
			$resultado = $this->db->query("INSERT INTO pacientes (nombre_paciente, apellido_paciente, direccion_paciente, telefono_paciente) VALUES ('$nombre_paciente', '$apellido_paciente', '$direccion_paciente', '$telefono_paciente')");
			
		}
		
		public function modificar($id, $nombre_paciente, $apellido_paciente, $direccion_paciente, $telefono_paciente){
			
			$resultado = $this->db->query("UPDATE pacientes SET nombre_paciente='$nombre_paciente', apellido_paciente='$apellido_paciente', direccion_paciente='$direccion_paciente', telefono_paciente='$telefono_paciente' WHERE id_paciente = '$id'");			
		}
		
		public function eliminar($id){

			$resultado = $this->db->query("DELETE FROM pacientes WHERE id_paciente = '$id'");
			
		}
		
		public function get_paciente($id)
		{
			$sql = "SELECT *FROM pacientes WHERE id_paciente = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>