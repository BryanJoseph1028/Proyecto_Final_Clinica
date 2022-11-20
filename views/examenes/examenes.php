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
	<link rel="stylesheet" href="assets/css/mystyle.css">
</head>

<body>
	<div class="container content">
	<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><?php echo $data["titulo"]; ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="vistas.php?c=examenes&a=nuevo" class="btn btn-primary">Agregar</a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Buscar Examen">
					</form>
				</div>
			</div>
		</nav>
		<br />
		<div class="table-responsive">
		<div class="table-wrapper-scroll-y my-custom-scrollbar">
			<table border="2" id="myTable" width="80%" class="table table-white table-hover table-striped">
				<thead>
					<tr>
						<th>Nombre Examen</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($data["examenes"] as $dato) {
						echo "<tr>";
						echo "<td>" . $dato["nombre_examen"] . "</td>";
						echo "<td><a href='vistas.php?c=examenes&a=modificar&id=" . $dato["id_examen"] . "' class='btn btn-warning'>Modificar</a></td>";
						echo "<td><a href='vistas.php?c=examenes&a=eliminar&id=" . $dato["id_examen"] . "' class='btn btn-danger' onclick=\"return confirm('Esta seguro de elimiar el registro?');\">Eliminar</a></td>";
						echo "</tr>";
					}
					?>
				</tbody>

			</table>
			</div>
		</div>
	</div>
</body>
<script>
	function myFunction() {
		// Declare variables
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		// Loop through all table rows, and hide those who don't match the search query
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>

</html>