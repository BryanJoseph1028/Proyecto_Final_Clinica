<?php
	
	class FarmaciaController {
        public function __construct()
        {
            require_once "models/MedicamentosModel.php";
        }
		public function index(){
            $medicamentos = new Medicamentos_model();

            $data["medicamentos"] = $medicamentos->get_medicamentos();

			require_once "views/medicamentos/Lviewcliente.php";	
		}
	}
?>