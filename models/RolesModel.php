<?php
	
	class Roles_model {
		
		private $db;
		private $roles;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->roles = array();
		}
		
		public function get_roles()
		{
			$sql = "SELECT id_rol, nombre_rol FROM roles";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->roles[] = $row;
			}
			return $this->roles;
		}
		
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO roles (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id_rol, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE roles SET nombre_rol='$nombre_rol' WHERE id_rol = '$id_rol'");			
		}
		
		public function eliminar($id_rol){
			
			$resultado = $this->db->query("DELETE FROM roles WHERE id_rol = '$id_rol'");
			
		}
		
		public function get_rol($id_rol)
		{
			$sql = "SELECT *FROM roles WHERE id_rol = '$id_rol'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>