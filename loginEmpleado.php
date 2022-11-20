<?php
@$usuario = $_POST['txt_usuario'];
@$contra = $_POST['txt_contra'];

session_start();
$_SESSION['usuario'] = $usuario;

$conn = mysqli_connect("localhost", "root", "abc123", "db_clinica");

$consulta = "SELECT * FROM empleados WHERE usuario = '$usuario' AND contra = '$contra';";
$resultado = mysqli_query($conn, $consulta);
$filas = mysqli_fetch_array($resultado);

if (@$filas['id_rol'] == 3) {
    header("location: vistas.php?c=inicio");
    //require_once "views/Inicio.php";
} else if (@$filas[0] == NULL) {
?>
    <?php
    include("loginEmpleado.php");
    ?>
    <!-- Error Alert -->
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Usuario o Contraseña incorrectos, por favor intente de nuevo!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php

}else if (@$filas['id_rol'] == 1) {
    header("location: vistas.php?c=inicioempleados");
    //require "views/inicios/inicioempleados.php";
}else if (@$filas['id_rol'] == 5) {
    header("location: vistas.php?c=iniciofarmacia");
    //require "views/inicios/inicioempleados.php";
}

mysqli_free_result($resultado);
mysqli_close($conn);
