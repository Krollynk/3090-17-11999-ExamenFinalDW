<?php
include ('../controllers/db_conection.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Registro de Usuarios</title>
    </head>
    <body>
        <div class="contenedor">
            <h1>Formulario Medicos</h1>
            <?php if(isset($_SESSION['message'])) { ?>
            <div class="mensaje">
                <p><?= $_SESSION['message'] ?></p>
            </div>
            <?php session_unset(); }?>
            <form action="" name="formulario" method="POST">
                <table>
                    <tr>
                        <td>No. Colegiado:</td>
                        <td><input type="text" name="colegiado" id="colegiado" placeholder="No. Colegiado" required></td>
                    </tr>
                    <tr>
                        <td>Nombre Completo:</td>
                        <td><input type="text" name="nombre" id="colegiado" placeholder="Nombre completo" required></td>
                    </tr>
                    <tr>
                        <td>Dirección:</td>
                        <td><input type="text" name="direccion" id="direccion" placeholder="Dirección" required></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td><input type="text" name="fecha" id="fecha" placeholder="Nacimiento" required></td>
                    </tr>
                    <tr>
                        <td>Correo Electronico:</td>
                        <td><input type="email" name="correo" id="correo" placeholder="correo" required></td>
                    </tr>
                    <tr>
                        <td>Especialidad:</td>
                        <td><select name="especialidad" id="especialidad">
                            <option value="medico general">Medico General</option>
                            <option value="pediatra">Pediatra</option>
                            <option value="internista">Internista</option>
                            <option value="traumatologo">Traumatologo</option>
                            <option value="otros">otros</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" class="boton" value="enviar" onclick="medico_val1()"></td>
                        <td><input type="submit" name="actualizar" class="boton" value="actualizar" onclick="medico_val2()"></td>
                        <td><a href="../index.php"><input type="button" name="regresar" class="boton" value="regresar"></a></td>
                    </tr>
                </table>
            </form>
        </div>

        <table id="medico_consulta">
            <thead>
                <tr>
                    <th>No.Colegiado</th>
                    <th>Nombre Completo</th>
                    <th>Direccion</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo Electronico</th>
                    <th>Especialidad</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM medicos";
                $result_consulta = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_consulta, )){ ?>
                <tr>
                    <td><?php echo $row['colegiado']?></td>
                    <td><?php echo $row['nombres']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['nacimiento']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['especialidad']?></td>
                    <td>
                        <a href="../controllers/borrar.php?colegiado=<?php echo $row['colegiado']?>"><i class="ri-delete-bin-fill"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
  <script src="../js/validacion.js"></script>
</html>