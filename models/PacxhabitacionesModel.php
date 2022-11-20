<?php
	
	class Pacxhabitaciones_model {
		
		private $db;
		private $pacxhabitaciones;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->pacxhabitaciones = array();
		}
		
		public function get_pacxhabitaciones()
		{
			$sql = "SELECT  e.id_pac_x_hab, r.nombre_paciente, r.id_paciente, s.nombre_habitacion, s.id_habitacion FROM pac_x_hab AS e INNER JOIN pacientes AS r ON e.id_paciente = r.id_paciente INNER JOIN habitaciones AS s ON e.id_habitacion = s. id_habitacion ORDER BY e.id_pac_x_hab;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->pacxhabitaciones[] = $row;
			}
			return $this->pacxhabitaciones;
		}
		
		public function insertar($id_paciente, $id_habitacion){
			
			$resultado = $this->db->query("INSERT INTO pac_x_hab (id_paciente, id_habitacion) VALUES ('$id_paciente', '$id_habitacion')");
			
		}
		
		public function modificar($id, $id_paciente, $id_habitacion){
			
			$resultado = $this->db->query("UPDATE pac_x_hab SET  id_paciente='$id_paciente', id_habitacion='$id_habitacion' WHERE id_pac_x_hab = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM pac_x_hab WHERE id_pac_x_hab = '$id'");
			
		}
		
		public function get_empleado($id)
		{
			$sql = "SELECT  e.id_pac_x_hab, r.nombre_paciente, r.id_paciente, s.nombre_habitacion, s.id_habitacion FROM pac_x_hab AS e INNER JOIN pacientes AS r ON e.id_paciente = r.id_paciente INNER JOIN habitaciones AS s ON e.id_habitacion = s.id_habitacion WHERE e.id_pac_x_hab = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>