<?php
	
	class Empleados_model {
		
		private $db;
		private $empleados;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->empleados = array();
		}
		
		public function get_empleados()
		{
			$sql = "SELECT  e.id_empleado, e.nombre_empleado, e.apellido_empleado, e.nit, r.nombre_rol, r.id_rol, s.nombre_sucursal, s.id_sucursal, e.usuario, e.contra FROM empleados AS e INNER JOIN roles AS r ON e.id_rol = r.id_rol INNER JOIN sucursales AS s ON e.id_sucursal = s. id_sucursal ORDER BY e.id_empleado;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->empleados[] = $row;
			}
			return $this->empleados;
		}
		
		public function insertar($nombre_empleado, $apellido_empleado, $nit, $id_rol, $id_sucursal, $usuario, $contra){
			
			$resultado = $this->db->query("INSERT INTO empleados (nombre_empleado, apellido_empleado, nit, id_rol, id_sucursal, usuario, contra) VALUES ('$nombre_empleado', '$apellido_empleado', '$nit', '$id_rol', '$id_sucursal', '$usuario', '$contra')");
			
		}
		
		public function modificar($id, $nombre_empleado, $apellido_empleado, $nit, $id_rol, $id_sucursal,$usuario, $contra){
			
			$resultado = $this->db->query("UPDATE empleados SET nombre_empleado='$nombre_empleado', apellido_empleado='$apellido_empleado', nit='$nit', id_rol='$id_rol', id_sucursal='$id_sucursal', usuario='$usuario', contra='$contra' WHERE id_empleado = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM empleados WHERE id_empleado = '$id'");
			
		}
		
		public function get_empleado($id)
		{
			$sql = "SELECT  e.id_empleado, e.nombre_empleado, e.apellido_empleado, e.nit, r.nombre_rol, r.id_rol, s.nombre_sucursal, s.id_sucursal, e.usuario, e.contra FROM empleados AS e INNER JOIN roles AS r ON e.id_rol = r.id_rol INNER JOIN sucursales AS s ON e.id_sucursal = s.id_sucursal WHERE e.id_empleado = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>