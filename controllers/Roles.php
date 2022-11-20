<?php
	
	class RolesController {
		
		public function __construct(){
			require_once "models/RolesModel.php";
		}
		
		public function index(){
			$roles = new Roles_model();

			$data["titulo"] = "Roles";
			$data["roles"] = $roles->get_roles();
			
			require_once "views/roles/roles.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Roles";

			require_once "views/roles/roles_nuevo.php";
		}
		
		public function guarda(){
			$nombre_rol = $_POST['nombre_rol'];
			
			$roles = new Roles_model();
			$roles->insertar($nombre_rol);

			$data["titulo"] = "Roles";

			$this->index();
		}
		
		public function modificar($id){
			$roles = new Roles_model();
			
			$data["id_rol"] = $id;
			$data["roles"] = $roles->get_Rol($id);
			$data["titulo"] = "Roles";

			require_once "views/roles/roles_modificar.php";
		}
		
		public function actualizar(){
			$id = $_POST['id_rol'];
			$nombre_rol = $_POST['nombre_rol'];

			$roles = new Roles_model();
			$roles->modificar($id, $nombre_rol);

			$data["titulo"] = "Roles";

			$this->index();
		}
		
		public function eliminar($id){
			$roles = new Roles_model();
			$roles->eliminar($id);

			$data["titulo"] = "Roles";
			
			$this->index();
		}
	}
?>