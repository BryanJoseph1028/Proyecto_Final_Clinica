<?php
@session_start();
$usuario = $_SESSION['usuario'];

if(!isset($usuario)){
  header("location: Lempleado.php");
}

?>
<!doctype html>
<html lang="es">

<head>
  <link rel="shortcut icon" href="img/ajolote.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/sidebar.css">
</head>

<body>

  <div class="sidebar">
    <a class="active">Bienvenido <?php echo"$usuario" ?></a>

    <div class="dropdown">
      <button class="dropbtn">Menu clinica</button>
      <div class="dropdown-content">
        <a class="active" href="vistas.php?c=empleados">Empleados</a>
        <a class="active" href="vistas.php?c=sucursales">Sucursales</a>
        <a class="active" href="vistas.php?c=doctores">Doctores</a>
        <a class="active" href="vistas.php?c=habitaciones">Habitaciones</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Menu paciente</button>
      <div class="dropdown-content">
        <a class="active" href="vistas.php?c=pacientes">Pacientes</a>
        <a class="active" href="vistas.php?c=historiales">Historiales</a>
        <a class="active" href="vistas.php?c=doctores">Doctores</a>
        <a class="active" href="vistas.php?c=habitaciones">Habitaciones</a>
        <a class="active" href="vistas.php?c=diagnosticos">Diagnosticos</a>
        <a class="active" href="vistas.php?c=examenes">Examenes</a>
        <a class="active" href="vistas.php?c=pacxhabitaciones">Paciente-Habitacion</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Menu farmacia</button>
      <div class="dropdown-content">
        <a class="active" href="vistas.php?c=medicamentos">Medicamentos</a>
        <a class="active" href="vistas.php?c=clientes">Clientes</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Otros</button>
      <div class="dropdown-content">
        <a class="active" href="vistas.php?c=roles">Roles</a>
        <a class="active" href="vistas.php?c=especialidades">Especialidades</a>
      </div>
    </div>
    <a class="active" href="logout.php">LogOut</a>
  </div>
</body>

</html>