<?php
	
	class Historiales_model {
		
		private $db;
		private $historiales;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->historiales = array();
		}
		
		public function get_historiales()
		{
			$sql = "SELECT  h.id_historial, h.fecha_registro, h.id_paciente, p.nombre_paciente, h.id_sucursal, s.nombre_sucursal, h.id_diagnostico, d.diagnostico, h.id_examen, e.nombre_examen, h.id_doctor, d1.nombre_doctor FROM historiales AS h INNER JOIN pacientes AS p ON h.id_paciente = p.id_paciente INNER JOIN sucursales AS s ON h.id_sucursal = s. id_sucursal  INNER JOIN diagnosticos AS d ON h.id_diagnostico = d.id_diagnostico INNER JOIN examenes AS e ON h.id_examen = e.id_examen INNER JOIN doctores AS d1 ON h.id_doctor = d1.id_doctor ORDER BY h.fecha_registro;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->historiales[] = $row;
			}
			return $this->historiales;
		}
		
		public function insertar($fecha_registro, $id_paciente, $id_sucursal, $id_diagnostico, $id_examen, $id_doctor){
			
			$resultado = $this->db->query("INSERT INTO historiales (fecha_registro, id_paciente, id_sucursal, id_diagnostico, id_examen, id_doctor) VALUES ('$fecha_registro', '$id_paciente', '$id_sucursal', '$id_diagnostico', '$id_examen', '$id_doctor')");
			
		}
		
		public function modificar($id, $fecha_registro, $id_paciente, $id_sucursal, $id_diagnostico, $id_examen, $id_doctor){
			
			$resultado = $this->db->query("UPDATE historiales SET fecha_registro='$fecha_registro', id_paciente='$id_paciente', id_sucursal='$id_sucursal', id_diagnostico='$id_diagnostico', id_examen='$id_examen', id_doctor='$id_doctor' WHERE id_historial = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM historiales WHERE id_historial = '$id'");
			
		}
		
		public function get_historial($id)
		{
			$sql = "SELECT  h.id_historial, h.fecha_registro, h.id_paciente, p.nombre_paciente, h.id_sucursal, s.nombre_sucursal, h.id_diagnostico, d.diagnostico, h.id_examen, e.nombre_examen, h.id_doctor, d1.nombre_doctor FROM historiales AS h INNER JOIN pacientes AS p ON h.id_paciente = p.id_paciente INNER JOIN sucursales AS s ON h.id_sucursal = s. id_sucursal  INNER JOIN diagnosticos AS d ON h.id_diagnostico = d.id_diagnostico INNER JOIN examenes AS e ON h.id_examen = e.id_examen INNER JOIN doctores AS d1 ON h.id_doctor = d1.id_doctor WHERE h.id_historial = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>