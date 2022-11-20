<?php
	
	class EspecialidadesController {
		
		public function __construct(){
			require_once "models/EspecialidadesModel.php";
		}
		
		public function index(){
			
			
			$especialidades = new Especialidades_model();
			$data["titulo"] = "Especialidades";
			$data["especialidades"] = $especialidades->get_especialidades();
			
			require_once "views/especialidades/especialidades.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Especialidades";
			require_once "views/especialidades/especialidades_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre_especialidad = $_POST['nombre_especialidad'];
			
			$especialidades = new Especialidades_model();
			$especialidades->insertar($nombre_especialidad);
			$data["titulo"] = "Especialidades";
			$this->index();
		}
		
		public function modificar($id){
			
			$especialidades = new Especialidades_model();
			
			$data["id_especialidad"] = $id;
			$data["especialidades"] = $especialidades->get_Especialidad($id);
			$data["titulo"] = "Especialidades";
			require_once "views/especialidades/especialidades_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_especialidad'];
			$nombre_especialidad = $_POST['nombre_especialidad'];

			$especialidades = new Especialidades_model();
			$especialidades->modificar($id, $nombre_especialidad);
			$data["titulo"] = "Especialidades";
			$this->index();
		}
		
		public function eliminar($id){
			
			$especialidades = new Especialidades_model();
			$especialidades->eliminar($id);
			$data["titulo"] = "Especialidades";
			$this->index();
		}
	}
?>