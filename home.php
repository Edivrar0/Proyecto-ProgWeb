<?php
include("conexion.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Proyecto Final CRUD</title>
</head>

<body>
    <table>
          <tbody>
               <tr>
                    <td>
                         <a class="botones" href="cerrar_sesion.php">Cerrar Sesión</a>
                    </td>
               </tr>
          </tbody>
    </table>
    <div>
        <h1 class="centrar">Crear usuario</h1>
        <div class="centrar" >
        <form action="crear.php" method="POST">
            <input class="cajas" type="text" name="nombre" placeholder="Nombre">
            <input class="cajas" type="text" name="usuario" placeholder="Usuario">
            <input class="cajas" type="password" name="contra" placeholder="Contraseña">
            <input class="cajas" type="number" name="tel" placeholder="Número de teléfono">
            <input class="cajas" type="email" name="email" placeholder="Email">
            <input class="cajas" type="text" name="direccion" placeholder="Dirección">

            <input class="botones"type="submit" value="Agregar">
        </form>
        </div>
    </div>

    <div class="centrar">
        <h2>Usuarios registrados</h2>
    </div>
    <div class="centrar">
        <table class="tablas">
            <tbody>
                <tr style="font-weight: bold;">
                    <td>Nombre</td>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                    <td>Teléfono</td>
                    <td>Email</td>
                    <td>Direccion</td>
                    <td>Fecha de Registdo</td>
                    <td>Permisos</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <?php
                        $sql = "select * from usuarios";
                        $result = $con->query($sql);
                        while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['usuario'] . "</td>";
                            echo "<td>" . $row['contra'] . "</td>";
                            echo "<td>" . $row['tel'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['direccion'] . "</td>";
                            echo "<td>" . $row['registro'] . "</td>";
                            echo "<td>" . $row['permisos'] . "</td>";
                            echo '<td><a href="actualizar.php?id=' . $row['id'] . '" role="button" style="padding: 5px; border: 2px solid; border-radius: 5px; color: green; font-weight: bold; font-size: 0.8em;">Actualizar</a></td>';
                            echo '<td><a href="eliminar.php?id=' . $row['id'] . '" role="button" style="padding: 5px; border: 2px solid; border-radius: 5px;  color: red; font-weight: bold; font-size: 0.8em;">Eliminar</a></td>';
                            }
                        echo "</tr>";

                        $con->close();
                    ?>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>