<?php
	
	class ExamenesController {
		
		public function __construct(){
			require_once "models/ExamenesModel.php";
		}
		
		public function index(){
			$examenes = new Examenes_model();

			$data["titulo"] = "Examenes";
			$data["examenes"] = $examenes->get_examenes();
			
			require_once "views/examenes/examenes.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Examenes";

			require_once "views/examenes/examenes_nuevo.php";
		}
		
		public function guarda(){
			$nombre_examen = $_POST['nombre_examen'];
			
			$examenes = new Examenes_model();
			$examenes->insertar($nombre_examen);

			$data["titulo"] = "Examenes";

			$this->index();
		}
		
		public function modificar($id){
			$examenes = new Examenes_model();
			
			$data["id_examen"] = $id;
			$data["examenes"] = $examenes->get_examen($id);

			$data["titulo"] = "Examenes";

			require_once "views/examenes/examenes_modificar.php";
		}
		
		public function actualizar(){
			$id = $_POST['id_examen'];
			$nombre_examen = $_POST['nombre_examen'];

			$examenes = new Examenes_model();
			$examenes->modificar($id, $nombre_examen);

			$data["titulo"] = "Examenes";

			$this->index();
		}
		
		public function eliminar($id){	
			$examenes = new Examenes_model();
			$examenes->eliminar($id);

			$data["titulo"] = "Examenes";
            
			$this->index();
		}
	}
?>