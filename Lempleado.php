<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/ajolote.jpg">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLINICA UMG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/mystyle.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Clinica UMG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!--<a href="vistas.php?c=clientes&a=nuevo" class="btn btn-primary">Agregar</a>-->
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </br>
  </br>
  <section class="vh-50">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <form action="loginEmpleado.php" method="POST" autocomplete="off">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <img src="img/clinica.png" alt="Sample image" height="100" width="100">
              <p class="lead fw-normal mb-0 me-3">Login</p>

            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="txt_usuario" name="txt_usuario" class="form-control form-control-lg" required />
              <label class="form-label" for="txt_usuario">Ingrese su usuario</label>
            </div>


            <div class="form-outline mb-3">
              <input type="password" id="txt_contra" name="txt_contra" class="form-control form-control-lg" required />
              <label class="form-label" for="txt_contra">Ingrese su contraseña</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btn_login" id="btn_login">Ingresar</button>

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