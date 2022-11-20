<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "abc123", "db_clinica");
			return $conexion;
			
		}
	}

$server = 'localhost';
$username = 'root';
$password = 'abc123';
$database = 'db_clinica';

try {
  $db = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>