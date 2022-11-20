<?php
	
	class PacxhabitacionesController {
		
		public function __construct(){
			require_once "models/PacxhabitacionesModel.php";
            require_once "models/PacientesModel.php";
            require_once "models/HabitacionesModel.php";
		}
		
		public function index(){
			$pacxhabitaciones = new Pacxhabitaciones_model();

			$data["titulo"] = "Paciente-Habitacion";
			$data["pacxhabitaciones"] = $pacxhabitaciones->get_pacxhabitaciones();
			
			require_once "views/pacxhabitaciones/pacxhabitaciones.php";	
		}
		
		public function nuevo(){
            $pacientes = new Pacientes_model();
            $habitaciones = new Habitaciones_model();

			$data["titulo"] = "Paciente-Habitacion";
            $datar["pacientes"] = $pacientes->get_pacientes();
            $datas["habitaciones"] = $habitaciones->get_habitaciones();


			require_once "views/pacxhabitaciones/pacxhabitaciones_nuevo.php";
		}
		
		public function guarda(){
            $id_paciente = $_POST['id_paciente'];
            $id_habitacion = $_POST['id_habitacion'];
			
			$pacxhabitaciones = new Pacxhabitaciones_model();
			$pacxhabitaciones->insertar($id_paciente, $id_habitacion);
            
			$data["titulo"] = "Paciente-Habitacion";
            
			$this->index();
		}
		
		public function modificar($id){
			$pacxhabitaciones = new Pacxhabitaciones_model();
			$pacientes = new Pacientes_model();
            $habitaciones = new Habitaciones_model();
			
			$data["id_pac_x_hab"] = $id;
			$data["pacxhabitaciones"] = $pacxhabitaciones->get_empleado($id);
			$datar["pacientes"] = $pacientes->get_pacientes();
			$datas["habitaciones"] = $habitaciones->get_habitaciones();
			$data["titulo"] = "Paciente-Habitacion";

			require_once "views/pacxhabitaciones/pacxhabitaciones_modificar.php";
		}
		
		public function actualizar(){
			$id = $_POST['id_pac_x_hab'];
            $id_paciente = $_POST['id_paciente'];
            $id_habitacion = $_POST['id_habitacion'];

			$pacxhabitaciones = new Pacxhabitaciones_model();
			$pacxhabitaciones->modificar($id, $id_paciente, $id_habitacion);

			$data["titulo"] = "Paciente-Habitacion";

			$this->index();
		}
		
		public function eliminar($id){		
			$pacxhabitaciones = new Pacxhabitaciones_model();
			$pacxhabitaciones->eliminar($id);

			$data["titulo"] = "Pacxhabitaciones";
            
			$this->index();
		}	
	}
?>