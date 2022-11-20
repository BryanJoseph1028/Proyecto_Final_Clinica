<?php
session_start();
switch($_SESSION['usuario']){
	case 'admin':
        require_once "views/Inicio.php";
		break;
	case 'enfermer@':
		require_once "views/inicios/inicioempleados.php";
		break;
	case 'farm@cia':
		require_once "views/inicios/iniciofarmacia.php";
        break;
}
if(!isset($usuario)){
	header("location: Lempleado.php");
  }  
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container content">	
			<h2><?php echo $data["titulo"]; ?></h2>			
			<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=sucursales&a=actualizar" autocomplete="off">

				<input type="hidden" id="id_sucursal" name="id_sucursal" value="<?php echo $data["id_sucursal"]; ?>" />

				<div class="form-group mb-3">
					<label for="nombre_sucursal">Nombre</label>
					<input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal" value="<?php echo $data["sucursales"]["nombre_sucursal"]?>" />
				</div>
				
                <div class="form-group mb-3">
					<label for="direccion_sucursal">Direccion</label>
					<input type="text" class="form-control" id="direccion_sucursal" name="direccion_sucursal" value="<?php echo $data["sucursales"]["direccion_sucursal"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
				
			</form>
		</body>
	</html>		