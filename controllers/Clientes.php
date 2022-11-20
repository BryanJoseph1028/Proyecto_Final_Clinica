<?php
	
	class ClientesController {
		
		public function __construct(){
			require_once "models/ClientesModel.php";
		}
		
		public function index(){
			$clientes = new Clientes_model();

			$data["titulo"] = "Clientes";
			$data["clientes"] = $clientes->get_clientes();
			
			require_once "views/clientes/clientes.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Clientes";

			require_once "views/clientes/clientes_nuevo.php";
		}
		
		public function guarda(){
            $nit = $_POST['nit'];
			$nombre_cliente = $_POST['nombre_cliente'];
            $apellido_cliente = $_POST['apellido_cliente'];
            $telefono = $_POST['telefono'];
			$usuario = $_POST['usuario'];
			$contra = $_POST['contra'];
			
			$clientes = new Clientes_model();
			$clientes->insertar($nit, $nombre_cliente, $apellido_cliente, $telefono, $usuario, $contra);
			$data["titulo"] = "Clientes";
			$this->index();
		}
		
		public function modificar($id){
			$clientes = new Clientes_model();
			
			$data["id_cliente"] = $id;
			$data["clientes"] = $clientes->get_cliente($id);
			$data["titulo"] = "Clientes";

			require_once "views/clientes/clientes_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_cliente'];
            $nit = $_POST['nit'];
			$nombre_cliente = $_POST['nombre_cliente'];
            $apellido_cliente = $_POST['apellido_cliente'];
            $telefono = $_POST['telefono'];
			$usuario = $_POST['usuario'];
			$contra = $_POST['contra'];

			$clientes = new Clientes_model();
			$clientes->modificar($id, $nit, $nombre_cliente, $apellido_cliente, $telefono, $usuario, $contra);
			$data["titulo"] = "Clientes";
			$this->index();
		}
		
		public function eliminar($id){
			
			$clientes = new Clientes_model();
			$clientes->eliminar($id);
			$data["titulo"] = "Clientes";
			$this->index();
		}	
	}
?>