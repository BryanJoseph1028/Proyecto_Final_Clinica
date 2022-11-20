<?php
	
	class Clientes_model {
		
		private $db;
		private $clientes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->clientes = array();
		}
		
		public function get_clientes()
		{
			$sql = "SELECT *FROM clientes;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->clientes[] = $row;
			}
			return $this->clientes;
		}
		
		public function insertar($nit, $nombre_cliente, $apellido_cliente, $telefono, $usuario, $contra){
			
			$resultado = $this->db->query("INSERT INTO clientes (nit, nombre_cliente, apellido_cliente, telefono, usuario, contra) VALUES ('$nit', '$nombre_cliente', '$apellido_cliente', '$telefono', '$usuario', '$contra')");
			
		}
		
		public function modificar($id, $nit, $nombre_cliente, $apellido_cliente, $telefono, $usuario, $contra){
			
			$resultado = $this->db->query("UPDATE clientes SET nit='$nit', nombre_cliente='$nombre_cliente', apellido_cliente='$apellido_cliente', telefono='$telefono', usuario='$usuario', contra='$contra' WHERE id_cliente = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM clientes WHERE id_cliente = '$id'");
			
		}
		
		public function get_cliente($id)
		{
			$sql = "SELECT *FROM clientes WHERE id_cliente = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>