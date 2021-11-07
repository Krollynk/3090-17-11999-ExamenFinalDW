<?php
include ('db_conection.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Registro de Usuarios</title>
  </head>
  <body>
      <div class="contenedor">
          <h1>Formulario</h1>
          <form action="" name="formulario" method="POST">
              <table>
                  <tr>
                      <td>Usuario:</td>
                      <td><input type="text" name="usuario" id="usuario" placeholder="Ingrese un nombre de usuario" required></td>
                  </tr>
                  <tr>
                      <td>contraseña:</td>
                      <td><input type="password" name="pass" id="pass" placeholder="ingrese su contraseña" required></td>
                  </tr>
                  <tr>
                      <td>Nombre:</td>
                      <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required></td>
                  </tr>
                  <tr>
                      <td>Correo</td>
                      <td><input type="email" name="email" id="email" placeholder="Ingrese un correo electronico" required></td>
                  </tr>
                  <tr>
                      <td>Tipo de usuario:</td>
                      <td><select name="tipo_usuario" id="tipo_usuario" required>
                          <option value="administrador">Administrador</option>
                          <option value="usuario">Usuario</option>
                          <option value="medico">Medico</option>
                          <option value="enfermero">Enfermero</option>
                          <option value="secretaria">Secreatria</option>
                      </select></td>
                  </tr>
                  <tr>
                      <td><input type="submit" name="enviar" class="boton" value="enviar" onclick="validar2()"></td>
                      <td><input type="submit" name="actualizar" class="boton" value="actualizar" onclick="validar4()"></td>
                  </tr>
              </table>
          </form>
      </div>

      <table id="consultas">
                  <thead>
                      <tr>
                          <th>Usuario</th>
                          <th>Contraseña</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Tipo Usuario</th>
                          <th>Accion</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = "SELECT * FROM usuarios";
                      $result_consulta = mysqli_query($conn, $query);

                      while($row = mysqli_fetch_array($result_consulta, )){ ?>
                      <tr>
                          <td><?php echo $row['usuario']?></td>
                          <td><?php echo $row['pass']?></td>
                          <td><?php echo $row['nombre']?></td>
                          <td><?php echo $row['correo']?></td>
                          <td><?php echo $row['tpuser']?></td>
                          <td>
                              <a href="borrar.php?user=<?php echo $row['usuario']?>"><i class="ri-delete-bin-fill"></i></a>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
  </body>
  <script src="validacion.js"></script>
</html>