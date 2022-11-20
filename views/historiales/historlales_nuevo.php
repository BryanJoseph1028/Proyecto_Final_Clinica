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
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
	
	<body>
		<div class="container content">
			<h2><?php echo $data["titulo"]; ?></h2>	
			<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=historiales&a=guarda" autocomplete="off">

				<div class="form-group mb-3">
					<label for="fecha_registro">Fecha Registro</label>
					<input type="date" class="form-control" id="fecha_registro" name="fecha_registro" />
				</div>
				
				<div class="form-group mb-3">
					<label for="id_paciente">Pacientes</label>
                    <select class="form-select" name="id_paciente" id="id_paciente">
                        <option value=0> ---- Elija un paciente---- </option>
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
                        <option value=0> ---- Elija una sucursal---- </option>
                        <?php 
                            foreach($datas["sucursales"] as $dato){
                                echo "<option value=".$dato["id_sucursal"].">".$dato["nombre_sucursal"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
                <div class="form-group mb-3">
					<label for="id_diagnostico">Diagnosticos</label>
                    <select class="form-select" name="id_diagnostico" id="id_diagnostico">
                        <option value=0> ---- Elija un diagnostico---- </option>
                        <?php 
                            foreach($datad["diagnosticos"] as $dato){
                                echo "<option value=".$dato["id_diagnostico"].">".$dato["diagnostico"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
                <div class="form-group mb-3">
					<label for="id_examen">Examenes</label>
                    <select class="form-select" name="id_examen" id="id_examen">
                        <option value=0> ---- Elija un examen---- </option>
                        <?php 
                            foreach($datae["examenes"] as $dato){
                                echo "<option value=".$dato["id_examen"].">".$dato["nombre_examen"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
                <div class="form-group mb-3">
					<label for="id_doctor">Doctores</label>
                    <select class="form-select" name="id_doctor" id="id_doctor">
                        <option value=0> ---- Elija un doctor---- </option>
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
		</div>
	</body>
</html>