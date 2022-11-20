<?php
	
	class EmpleadosController {
		
		public function __construct(){
			require_once "models/EmpleadosModel.php";
            require_once "models/RolesModel.php";
            require_once "models/SucursalesModel.php";
		}
		
		public function index(){
			$empleados = new Empleados_model();

			$data["titulo"] = "Empleados";
			$data["empleados"] = $empleados->get_empleados();
			
			require_once "views/empleados/empleados.php";	
		}
		
		public function nuevo(){
            $roles = new Roles_model();
            $sucursales = new Sucursales_model();

			$data["titulo"] = "Empleados";
            $datar["roles"] = $roles->get_roles();
            $datas["sucursales"] = $sucursales->get_sucursales();


			require_once "views/empleados/empleados_nuevo.php";
		}
		
		public function guarda(){
			$nombre_empleado = $_POST['nombre_empleado'];
            $apellido_empleado = $_POST['apellido_empleado'];
            $nit = $_POST['nit'];
            $id_rol = $_POST['id_rol'];
            $id_sucursal = $_POST['id_sucursal'];
			$usuario = $_POST['usuario'];
			$contra = $_POST['contra'];
			
			$empleados = new Empleados_model();
			$empleados->insertar($nombre_empleado, $apellido_empleado, $nit, $id_rol, $id_sucursal, $usuario, $contra);
			$data["titulo"] = "Empleados";
			$this->index();
		}
		
		public function modificar($id){
			$empleados = new Empleados_model();
			$roles = new Roles_model();
            $sucursales = new Sucursales_model();
			
			$data["id_empleado"] = $id;
			$data["empleados"] = $empleados->get_empleado($id);
			$datar["roles"] = $roles->get_roles();
			$datas["sucursales"] = $sucursales->get_sucursales();
			$data["titulo"] = "Empleados";

			require_once "views/empleados/empleados_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_empleado'];
			$nombre_empleado = $_POST['nombre_empleado'];
            $apellido_empleado = $_POST['apellido_empleado'];
            $nit = $_POST['nit'];
            $id_rol = $_POST['id_rol'];
            $id_sucursal = $_POST['id_sucursal'];
			$usuario = $_POST['usuario'];
			$contra = $_POST['contra'];

			$empleados = new Empleados_model();
			$empleados->modificar($id, $nombre_empleado, $apellido_empleado, $nit, $id_rol, $id_sucursal, $usuario, $contra);
			$data["titulo"] = "Empleados";
			$this->index();
		}
		
		public function eliminar($id){
			
			$empleados = new Empleados_model();
			$empleados->eliminar($id);
			$data["titulo"] = "Empleados";
			$this->index();
		}	
	}
?>