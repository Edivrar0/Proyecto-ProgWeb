<?php

include("conexion.php");

        $id = $_POST["id"];
        $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
        $contra = mysqli_real_escape_string($con, $_POST["contra"]);
        $tel = $_POST["tel"];
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $direccion = mysqli_real_escape_string($con, $_POST["direccion"]);
        $permisos = $_POST["permisos"];

        $sql = "UPDATE usuarios SET
                nombre='$nombre',
                usuario='$usuario',
                contra='$contra',
                tel='$tel',
                email='$email',
                direccion='$direccion',
                permisos='$permisos'
                WHERE id='$id'";

        $result = mysqli_query($con, $sql);

        if ($result) {
        header("Location: home.php");
        } else {
        echo "Error al actualizar los datos.";
        }

?>