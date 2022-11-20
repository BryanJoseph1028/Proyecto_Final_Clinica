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
			<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=empleados&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id_empleado" name="id_empleado" value="<?php echo $data["id_empleado"]; ?>" />
				
				<div class="form-group mb-3">
					<label for="nombre_empleado">Nombre</label>
					<input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" value="<?php echo $data["empleados"]["nombre_empleado"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="apellido_empleado">Apellido</label>
					<input type="text" class="form-control" id="apellido_empleado" name="apellido_empleado" value="<?php echo $data["empleados"]["apellido_empleado"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="nit">Nit</label>
					<input type="text" class="form-control" id="nit" name="nit" value="<?php echo $data["empleados"]["nit"]?>" />
				</div>
				
                <div class="form-group mb-3">
					<label for="id_rol">Rol</label>
                    <select class="form-select" name="id_rol" id="id_rol">
						<option value="<?php echo $data["empleados"]["id_rol"]?>" selected>--<?php echo $data["empleados"]["nombre_rol"]?>--</option>";
                        <?php 
                            foreach($datar["roles"] as $dato){
                                echo "<option value=".$dato["id_rol"].">".$dato["nombre_rol"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_sucursal">Sucursal</label>
                    <select class="form-select" name="id_sucursal" id="id_sucursal">
						echo "<option value="<?php echo $data["empleados"]["id_sucursal"]?>" selected>--<?php echo $data["empleados"]["nombre_sucursal"]?>--</option>";
                        <?php 
                            foreach($datas["sucursales"] as $dato){
                                echo "<option value=".$dato["id_sucursal"].">".$dato["nombre_sucursal"]."</option>";
                            }
                        ?>
                    </select>
				</div>

				<div class="form-group mb-3">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $data["empleados"]["usuario"]?>" />
				</div>

				<div class="form-group mb-3">
					<label for="contra">Contraseña</label>
					<input type="text" class="form-control" id="contra" name="contra" value="<?php echo $data["empleados"]["contra"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>

			</form>
		</body>
	</html>		