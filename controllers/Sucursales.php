<?php
	
	class SucursalesController {
		
		public function __construct(){
			require_once "models/SucursalesModel.php";
		}
		
		public function index(){
			
			
			$sucursales = new Sucursales_model();
			$data["titulo"] = "Sucursales";
			$data["sucursales"] = $sucursales->get_sucursales();
			
			require_once "views/sucursales/sucursales.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Sucursales";
            
			require_once "views/sucursales/sucursales_nuevo.php";
		}
		
		public function guarda(){	
			$nombre_sucursal = $_POST['nombre_sucursal'];
			$direccion_sucursal = $_POST['direccion_sucursal'];

			$sucursales = new Sucursales_model();
			$sucursales->insertar($nombre_sucursal, $direccion_sucursal);
			$data["titulo"] = "Sucursales";
			$this->index();
		}
		
		public function modificar($id){
			
			$sucursales = new Sucursales_model();
			
			$data["id_sucursal"] = $id;
			$data["sucursales"] = $sucursales->get_Sucursal($id);
			$data["titulo"] = "Sucursales";
			require_once "views/sucursales/sucursales_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_sucursal'];
			$nombre_sucursal = $_POST['nombre_sucursal'];
            $direccion_sucursal = $_POST['direccion_sucursal'];

			$sucursales = new Sucursales_model();
			$sucursales->modificar($id, $nombre_sucursal, $direccion_sucursal);
			$data["titulo"] = "Sucursales";
			$this->index();
		}
		
		public function eliminar($id){
			
			$sucursales = new Sucursales_model();
			$sucursales->eliminar($id);
			$data["titulo"] = "Sucursales";
			$this->index();
		}
	}
?>