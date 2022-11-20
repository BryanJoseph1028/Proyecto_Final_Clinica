<?php
	
	class PacientesController {
		
		public function __construct(){
			require_once "models/PacientesModel.php";
		}
		
		public function index(){
			$pacientes = new Pacientes_model();

			$data["titulo"] = "Pacientes";
			$data["pacientes"] = $pacientes->get_pacientes();
			
			require_once "views/pacientes/pacientes.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Pacientes";

			require_once "views/pacientes/pacientes_nuevo.php";
		}
		
		public function guarda(){
			$nombre_paciente = $_POST['nombre_paciente'];
            $apellido_paciente = $_POST['apellido_paciente'];
            $direccion_paciente = $_POST['direccion_paciente'];
            $telefono_paciente = $_POST['telefono_paciente'];
			
			$pacientes = new Pacientes_model();
			$pacientes->insertar($nombre_paciente, $apellido_paciente, $direccion_paciente, $telefono_paciente);
			$data["titulo"] = "Pacientes";
			$this->index();
		}
		
		public function modificar($id){
			$pacientes = new Pacientes_model();

			$data["id_paciente"] = $id;
			$data["pacientes"] = $pacientes->get_paciente($id);
			$data["titulo"] = "Pacientes";

			require_once "views/pacientes/pacientes_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_paciente'];
			$nombre_paciente = $_POST['nombre_paciente'];
            $apellido_paciente = $_POST['apellido_paciente'];
            $direccion_paciente = $_POST['direccion_paciente'];
            $telefono_paciente = $_POST['telefono_paciente'];

			$pacientes = new Pacientes_model();
			$pacientes->modificar($id, $nombre_paciente, $apellido_paciente, $direccion_paciente, $telefono_paciente);
			$data["titulo"] = "Pacientes";
			$this->index();
		}
		
		public function eliminar($id){
			
			$pacientes = new Pacientes_model();
			$pacientes->eliminar($id);
			$data["titulo"] = "Pacientes";
			$this->index();
		}	
	}
?>