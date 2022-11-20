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
			<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=historiales&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id_historial" name="id_historial" value="<?php echo $data["id_historial"]; ?>" />
				
				<div class="form-group mb-3">
					<label for="fecha_registro">Fecha Registro</label>
					<input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $data["historiales"]["fecha_registro"]?>" />
				</div>
				
                <div class="form-group mb-3">
					<label for="id_paciente">Paciente</label>
                    <select class="form-select" name="id_paciente" id="id_paciente">
						<option value="<?php echo $data["historiales"]["id_paciente"]?>" selected>--<?php echo $data["historiales"]["nombre_paciente"]?>--</option>";
                        <?php 
                            foreach($datap["pacientes"] as $dato){
                                echo "<option value=".$dato["id_paciente"].">".$dato["nombre_paciente"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_sucursal">Sucursal</label>
                    <select class="form-select" name="id_sucursal" id="id_sucursal">
						echo "<option value="<?php echo $data["historiales"]["id_sucursal"]?>" selected>--<?php echo $data["historiales"]["nombre_sucursal"]?>--</option>";
                        <?php 
                            foreach($datas["sucursales"] as $dato){
                                echo "<option value=".$dato["id_sucursal"].">".$dato["nombre_sucursal"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_diagnostico">Diagnostico</label>
                    <select class="form-select" name="id_diagnostico" id="id_diagnostico">
						echo "<option value="<?php echo $data["historiales"]["id_diagnostico"]?>" selected>--<?php echo $data["historiales"]["diagnostico"]?>--</option>";
                        <?php 
                            foreach($datad["diagnosticos"] as $dato){
                                echo "<option value=".$dato["id_diagnostico"].">".$dato["diagnostico"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_examen">Examen</label>
                    <select class="form-select" name="id_examen" id="id_examen">
						echo "<option value="<?php echo $data["historiales"]["id_examen"]?>" selected>--<?php echo $data["historiales"]["nombre_examen"]?>--</option>";
                        <?php 
                            foreach($datae["examenes"] as $dato){
                                echo "<option value=".$dato["id_examen"].">".$dato["nombre_examen"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_doctor">Doctor</label>
                    <select class="form-select" name="id_doctor" id="id_doctor">
						echo "<option value="<?php echo $data["historiales"]["id_doctor"]?>" selected>--<?php echo $data["historiales"]["nombre_doctor"]?>--</option>";
                        <?php 
                            foreach($datadr["doctores"] as $dato){
                                echo "<option value=".$dato["id_doctor"].">".$dato["nombre_doctor"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
                <div class="form-group mb-3">
				    <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>

			</form>
		</body>
	</html>		