<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($usuario)) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="img/ajolote.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/farmacia.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bienvenido <?php echo "$usuario" ?></a>
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
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    </br>
    <div class="container">
            <div class="row">
    <?php
    foreach ($data["medicamentos"] as $dato) {
        echo "<div class=\"card\">";
        echo "<img src='" . $dato["imagen"] . "' style=\"width: 100%\">";
        echo "<p class=\"name\">" . $dato["nombre_medicamento"] . "</p>";
        echo "<p class=\"price\">Q." . $dato["precio_u"] . "</p>";
        echo "<p><button>Añadir al carrito</button></p>";
        echo "</div>";
    }
    ?>
            </div>
            </div>
</body>

</html>