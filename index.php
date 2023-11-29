<!DOCTYPE html>
<html lang="en">
  
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
    <h2 class="centrar">Registro</h2>
    </div>

    <div class="centrar">
          <form action="crear.php" method="POST">
            <table>
              <tbody>
                <tr>
                  <td>
                    <label for="nombre"> Nombre:</label> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input class="cajas" type="text" id="nombre" required placeholder name="nombre"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="usuario"> Usuario:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="cajas" type="text" id="usuario" required placeholder name="usuario"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="contra"> Contraseña:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="cajas" type="text" id="contra" required placeholder name="contra"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="tel"> Número de Teléfono:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="cajas" type="number" id="tel" required placeholder name="tel"> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="email"> Correo Electrónico:</label> <br>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <input class="cajas" type="text" id="email" required placeholder name="email"> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="direccion"> Dirección</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="cajas" type="text" id="direccion" required placeholder name="direccion"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <button class="botones" style="width: 100px;"type="submit">Registrar</button> <button class="botones" type="reset" value="Reset">Vaciar Campos</button>
                  </td>
                </tr>
                <table class="centrar">
                  <tbody>
                    <tr>
                      <td>
                      <a class="botones" href="sesion.php">Iniciar Sesion</a>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </tbody>
            </table>
          </form>
    </div>
  </body>
</html>