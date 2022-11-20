<?php
	
	class DiagnosticosController {
		
		public function __construct(){
			require_once "models/DiagnosticosModel.php";
		}
		
		public function index(){
			
			
			$diagnosticos = new Diagnosticos_model();
			$data["titulo"] = "Diagnosticos";
			$data["diagnosticos"] = $diagnosticos->get_diagnosticos();
			
			require_once "views/diagnosticos/diagnosticos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Diagnosticos";
			require_once "views/diagnosticos/diagnosticos_nuevo.php";
		}
		
		public function guarda(){
			
			$diagnostico = $_POST['diagnostico'];
			
			$diagnosticos = new Diagnosticos_model();
			$diagnosticos->insertar($diagnostico);
			$data["titulo"] = "Diagnosticos";
			$this->index();
		}
		
		public function modificar($id){
			
			$diagnosticos = new Diagnosticos_model();
			
			$data["id_diagnostico"] = $id;
			$data["diagnosticos"] = $diagnosticos->get_diagnostico($id);
			$data["titulo"] = "Diagnosticos";
			require_once "views/diagnosticos/diagnosticos_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_diagnostico'];
			$diagnostico = $_POST['diagnostico'];

			$diagnosticos = new Diagnosticos_model();
			$diagnosticos->modificar($id, $diagnostico);
			$data["titulo"] = "Diagnosticos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$diagnosticos = new Diagnosticos_model();
			$diagnosticos->eliminar($id);
			$data["titulo"] = "Diagnosticos";
			$this->index();
		}
	}
?>