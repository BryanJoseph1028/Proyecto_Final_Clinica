<?php
	
	class DoctoresController {
		
		public function __construct(){
			require_once "models/DoctoresModel.php";
            require_once "models/EspecialidadesModel.php";
            require_once "models/SucursalesModel.php";
		}
		
		public function index(){
			$doctores = new Doctores_model();

			$data["titulo"] = "Doctores";
			$data["doctores"] = $doctores->get_doctores();
			
			require_once "views/doctores/doctores.php";	
		}
		
		public function nuevo(){
            $especialidades = new Especialidades_model();
            $sucursales = new Sucursales_model();

			$data["titulo"] = "Doctores";
            $datap["especialidades"] = $especialidades->get_especialidades();
            $datas["sucursales"] = $sucursales->get_sucursales();

			require_once "views/doctores/doctores_nuevo.php";
		}
		
		public function guarda(){
			$nombre_doctor = $_POST['nombre_doctor'];
            $id_especialidad = $_POST['id_especialidad'];
            $id_sucursal = $_POST['id_sucursal'];
			
			$doctores = new Doctores_model();
			$doctores->insertar($nombre_doctor, $id_especialidad, $id_sucursal);
			$data["titulo"] = "Doctores";
			$this->index();
		}
		
		public function modificar($id){
			$doctores = new Doctores_model();
            $especialidades = new Especialidades_model();
            $sucursales = new Sucursales_model();
			
			$data["id_doctor"] = $id;
			$data["doctores"] = $doctores->get_doctor($id);
            $datap["especialidades"] = $especialidades->get_especialidades();
            $datas["sucursales"] = $sucursales->get_sucursales();
			$data["titulo"] = "Doctores";

			require_once "views/doctores/doctores_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_doctor'];
			$nombre_doctor = $_POST['nombre_doctor'];
            $id_especialidad = $_POST['id_especialidad'];
            $id_sucursal = $_POST['id_sucursal'];

			$doctores = new Doctores_model();
			$doctores->modificar($id, $nombre_doctor, $id_especialidad, $id_sucursal);
			$data["titulo"] = "Doctores";
			$this->index();
		}
		
		public function eliminar($id){
			
			$doctores = new Doctores_model();
			$doctores->eliminar($id);
			$data["titulo"] = "Doctores";
			$this->index();
		}	
	}
?>