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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container content">
		<h2><?php echo $data["titulo"]; ?></h2>
		<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=medicamentos&a=actualizar" autocomplete="off" enctype="multipart/form-data">

			<input type="hidden" id="id_medicamento" name="id_medicamento" value="<?php echo $data["id_medicamento"]; ?>" />

			<div class="form-group mb-3">
				<label for="imagen">Agregue una imagen</label>
				<input type="file" class="form-cotrol-file" id="imagen" name="imagen"></input>
			</div>

			<div class="form-group mb-3">
				<label for="nombre_medicamento">Nombre</label>
				<input type="text" class="form-control" id="nombre_medicamento" name="nombre_medicamento" value="<?php echo $data["medicamentos"]["nombre_medicamento"] ?>" />
			</div>

			<div class="form-group mb-3">
				<label for="precio_u">Precio Unitario</label>
				<input type="text" class="form-control" id="precio_u" name="precio_u" value="<?php echo $data["medicamentos"]["precio_u"] ?>" />
			</div>

			<div class="form-group mb-3">
				<label for="cantidad_stock">Cantidad Stock</label>
				<input type="text" class="form-control" id="cantidad_stock" name="cantidad_stock" value="<?php echo $data["medicamentos"]["cantidad_stock"] ?>" />
			</div>

			<div class="form-group mb-3">
				<label for="cantidad_vendida">Cantidad Vendida</label>
				<input type="text" class="form-control" id="cantidad_vendida" name="cantidad_vendida" value="<?php echo $data["medicamentos"]["cantidad_vendida"] ?>" />
			</div>

			<div class="form-group mb-3">
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $data["medicamentos"]["descripcion"] ?>" />
			</div>

			<div class="form-group mb-3">
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
</body>

</html>