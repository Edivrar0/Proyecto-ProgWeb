<?php 
    include("conexion.php");
    $conn = $GLOBALS['con'];

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Error: No record found for ID $id.";
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="centrar">
            <h1 >
                Editar Información del Usuario
            </h1>
        </div>
        <div class="centrar">
            <form action="editar.php" method="POST">

                <button class="botones" style="font-size: 15px;" type="submit"> Guardar </button>
                <button class="botones" style="font-size: 15px;" type="cancel"> Cancelar </button>
                <br><br>

                <table class="tablas">
                    <thead>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Número de Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Permisos</th>
                    </thead>

                    <tbody>
                        <tr>
                        <td><input class="cajas" type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>"></td>
                        <td><input class="cajas" type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario']?>"></td>
                        <td><input class="cajas" type="text" name="contra" placeholder="Contraseña" value="<?= $row['contra']?>"></td>
                        <td><input class="cajas" type="number" name="tel" placeholder="Número de Teléfono" value="<?= $row['tel']?>"></td>
                        <td><input class="cajas" type="email" name="email" placeholder="Email" value="<?= $row['email']?>"></td>
                        <td><input class="cajas" type="text" name="direccion" placeholder="Dirección" value="<?= $row['direccion']?>"></td>
                        <td><input class="cajas" type="number" name="permisos" placeholder="Nivel de Permisos" value="<?= $row['permisos']?>"></td>
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </body>
</html>