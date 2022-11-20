<?php
@$usuario = $_POST['txt_usuario'];
@$contra = $_POST['txt_contra'];

session_start();
$_SESSION['usuario'] = $usuario;

$conn = mysqli_connect("localhost", "root", "abc123", "db_clinica");

$consulta = "SELECT * FROM clientes WHERE usuario = '$usuario' AND contra = '$contra';";
$resultado = mysqli_query($conn, $consulta);
$filas = mysqli_fetch_array($resultado);

if (@$filas['id_rol'] == 6) {
    header("location: vistas.php?c=farmacia");
} else if (@$filas[0] == NULL) {
?>
    <?php
    include("index.php");
    ?>
    <!-- Error Alert -->
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Usuario o Contraseña incorrectos, por favor intente de nuevo!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conn);
