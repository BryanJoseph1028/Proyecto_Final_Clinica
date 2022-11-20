<!DOCTYPE html>
<html lang="es">

<head>
<link rel="shortcut icon" href="img/ajolote.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/mystyle.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Clinica UMG</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<!--<a href="vistas.php?c=clientes&a=nuevo" class="btn btn-primary">Agregar</a>-->
					</li>
				</ul>
				<form class="d-flex" role="">
					<a href="index.php" class="btn btn-primary">Login</a>
				</form>
			</div>
		</div>
	</nav>
	</br>
	<section class="vh-50">
		<div class="container-fluid h-custom">
			<div class="row d-flex justify-content-center align-items-center h-100">

				<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
					<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=clientes&a=guarda" autocomplete="off">
						<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">

							<p class="lead fw-normal mb-0 me-3">Registro</p>

						</div>
						</br>
						<div class="form-group mb-3">
							<label for="nit">Nit</label>
							<input type="text" class="form-control" id="nit" name="nit" />
						</div>

						<div class="form-group mb-3">
							<label for="nombre_cliente">Nombres</label>
							<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required />
						</div>

						<div class="form-group mb-3">
							<label for="apellido_cliente">Apellidos</label>
							<input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" required />
						</div>

						<div class="form-group mb-3">
							<label for="telefono">Telefono</label>
							<input type="text" class="form-control" id="telefono" name="telefono" required />
						</div>

						<div class="form-group mb-3">
							<label for="usuario">Usuario</label>
							<input type="text" class="form-control" id="usuario" name="usuario" required />
						</div>

						<div class="form-group mb-3">
							<label for="contra">Contraseña</label>
							<input type="text" class="form-control" id="contra" name="contra" required />
						</div>

						<div class="form-group mb-3">
							<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</section>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
	<!-- MDB -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html>