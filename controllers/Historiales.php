<?php
	
	class HistorialesController {
		
		public function __construct(){
			require_once "models/HistorialesModel.php";
            require_once "models/PacientesModel.php";
            require_once "models/SucursalesModel.php";
            require_once "models/DiagnosticosModel.php";
            require_once "models/ExamenesModel.php";
            require_once "models/DoctoresModel.php";
		}
		
		public function index(){
			$historiales = new Historiales_model();

			$data["titulo"] = "Historiales";
			$data["historiales"] = $historiales->get_historiales();
			
			require_once "views/historiales/historiales.php";	
		}
		
		public function nuevo(){
            $pacientes = new Pacientes_model();
            $sucursales = new Sucursales_model();
            $diagnosticos = new Diagnosticos_model();
            $examenes = new Examenes_model();
            $doctores = new Doctores_model();

			$data["titulo"] = "Historiales";
            $datap["pacientes"] = $pacientes->get_pacientes();
            $datas["sucursales"] = $sucursales->get_sucursales();
            $datad["diagnosticos"] = $diagnosticos->get_diagnosticos();
            $datae["examenes"] = $examenes->get_examenes();
            $datadr["doctores"] = $doctores->get_doctores();

			require_once "views/historiales/historlales_nuevo.php";
		}
		
		public function guarda(){
			$fecha_registro = $_POST['fecha_registro'];
            $id_paciente = $_POST['id_paciente'];
            $id_sucursal = $_POST['id_sucursal'];
			$id_diagnostico = $_POST['id_diagnostico'];
            $id_examen = $_POST['id_examen'];
			$id_doctor = $_POST['id_doctor'];
			
			$historiales = new Historiales_model();
			$historiales->insertar($fecha_registro, $id_paciente, $id_sucursal, $id_diagnostico, $id_examen, $id_doctor);
			$data["titulo"] = "Historiales";
			$this->index();
		}
		
		public function modificar($id){
			$historiales = new Historiales_model();
            $pacientes = new Pacientes_model();
            $sucursales = new Sucursales_model();
            $diagnosticos = new Diagnosticos_model();
            $examenes = new Examenes_model();
            $doctores = new Doctores_model();
			
			$data["id_historial"] = $id;
			$data["historiales"] = $historiales->get_historial($id);
            $datap["pacientes"] = $pacientes->get_pacientes();
            $datas["sucursales"] = $sucursales->get_sucursales();
            $datad["diagnosticos"] = $diagnosticos->get_diagnosticos();
            $datae["examenes"] = $examenes->get_examenes();
            $datadr["doctores"] = $doctores->get_doctores();
			$data["titulo"] = "Historiales";

			require_once "views/historiales/historiales_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['id_historial'];
			$fecha_registro = $_POST['fecha_registro'];
            $id_paciente = $_POST['id_paciente'];
            $id_sucursal = $_POST['id_sucursal'];
			$id_diagnostico = $_POST['id_diagnostico'];
            $id_examen = $_POST['id_examen'];
			$id_doctor = $_POST['id_doctor'];

			$historiales = new Historiales_model();
			$historiales->modificar($id, $fecha_registro, $id_paciente, $id_sucursal, $id_diagnostico, $id_examen, $id_doctor);
			$data["titulo"] = "Historiales";
			$this->index();
		}
		
		public function eliminar($id){
			
			$historiales = new Historiales_model();
			$historiales->eliminar($id);
			$data["titulo"] = "Historiales";
			$this->index();
		}	
	}
?>