<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Proyecto Final ProgWeb1</title>
</head>

<body>
    <div>
    <h1 class="centrar">Proyecto Final</h1>
    <p class="centrar">Ramirez Rosales Edgar Ivan</p>
    <h2 class="centrar">Iniciar Sesión</h2>
    </div>

     <form action="inicio_sesion.php" method="post">

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <div>
            <table class="centrar">
                <tbody>
                    <tr>
                        <td><label for="nombre_usuario">Nombre de Usuario</label></td>
                    </tr>
                    <tr>
                        <td><input class="cajas" type="text" name="usuario" required placeholder="Ingresa tu Usuario"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Contraseña</label></td>
                    </tr>
                    <tr>
                        <td><input class="cajas" type="password" name="pass" required placeholder="Ingresa tu Contraseña"></td>
                    </tr>
                    <tr>
                        <td><button class="botones" type="submit">Iniciar Sesion</button> <button class="botones" type="reset" value="Reset">Vaciar Campos</button></td>
                    </tr>
                </tbody>
            </table>

        </div>

     </form>

</body>

</html>