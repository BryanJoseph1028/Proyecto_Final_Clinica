<?php
	
	class HabitacionesController {
		
		public function __construct(){
			require_once "models/HabitacionesModel.php";
            require_once "models/SucursalesModel.php";
		}
		
		public function index(){
			$habitaciones = new Habitaciones_model();

			$data["titulo"] = "Habitaciones";
			$data["habitaciones"] = $habitaciones->get_habitaciones();
			
			require_once "views/habitaciones/habitaciones.php";	
		}
		
		public function nuevo(){
            $sucursales = new Sucursales_model();

			$data["titulo"] = "Habitaciones";
            $datas["sucursales"] = $sucursales->get_sucursales();

			require_once "views/habitaciones/habitaciones_nuevo.php";
		}
		
		public function guarda(){
			$nombre_habitacion = $_POST['nombre_habitacion'];
            $id_sucursal = $_POST['id_sucursal'];
			
			$habitaciones = new Habitaciones_model();
			$habitaciones->insertar($nombre_habitacion, $id_sucursal);

			$data["titulo"] = "Habitaciones";
            
			$this->index();
		}
		
		public function modificar($id){
			$habitaciones = new Habitaciones_model();
            $sucursales = new Sucursales_model();
			
			$data["id_habitacion"] = $id;
			$data["habitaciones"] = $habitaciones->get_habitacion($id);
            $datas["sucursales"] = $sucursales->get_sucursales();
			$data["titulo"] = "Habitaciones";

			require_once "views/habitaciones/habitaciones_modificar.php";
		}
		
		public function actualizar(){
			$id = $_POST['id_habitacion'];
			$nombre_habitacion = $_POST['nombre_habitacion'];
            $id_sucursal = $_POST['id_sucursal'];

			$habitaciones = new Habitaciones_model();
			$habitaciones->modificar($id, $nombre_habitacion, $id_sucursal);

			$data["titulo"] = "Habitaciones";

			$this->index();
		}
		
		public function eliminar($id){
			$habitaciones = new Habitaciones_model();
			$habitaciones->eliminar($id);

			$data["titulo"] = "Habitaciones";

			$this->index();
		}	
	}
?>