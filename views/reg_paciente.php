<?php
include('../controllers/db_conection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Registro Pacientes</title>
</head>

<body>
    <div class="contenedor">
        <h1>Formulario Pacientes</h1>
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="mensaje">
                <p><?= $_SESSION['message'] ?></p>
            </div>
        <?php session_unset();
        } ?>
        <form action="" name="formulario" method="POST">
            <table>
                <tr>
                    <td>CUI:</td>
                    <td><input type="text" name="cui" id="cui" placeholder="Ingrese su CUI" required></td>
                </tr>
                <tr>
                    <td>Nombres:</td>
                    <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" required></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="apellido" id="apellido" placeholder="Ingrese sus apellidos" required></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento:</td>
                    <td><input type="text" name="fecha" id="fecha"  placeholder="Ingrese su fecha de nacimiento" required></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion" required></td>
                </tr>
                <tr>
                    <td>Padre:</td>
                    <td><input type="text" name="padre" id="padre" placeholder="Ingrese el nombre de su padre"></td>
                </tr>
                <tr>
                    <td>Madre:</td>
                    <td><input type="text" name="madre" id="madre" placeholder="Ingrese el nombre de su madre"></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="email" name="email" id="email" placeholder="Ingrese un correo electronico" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="enviar" class="boton" value="enviar" onclick="paciente_val1()"></td>
                    <td><input type="submit" name="actualizar" class="boton" value="actualizar" onclick="paciente_val2()"></td>
                    <td><a href="../index.php"><input type="button" name="regresar" class="boton" value="regresar"></a></td>
                </tr>
            </table>
        </form>
    </div>

    <table id="consult_paciente">
        <thead>
            <tr>
                <th>CUI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacimiento</th>
                <th>Direccion</th>
                <th>Padre</th>
                <th>Madre</th>
                <th>Correo</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM pacientes";
            $result_consulta = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_consulta,)) { ?>
                <tr>
                    <td><?php echo $row['CUI'] ?></td>
                    <td><?php echo $row['nombres'] ?></td>
                    <td><?php echo $row['apellidos'] ?></td>
                    <td><?php echo $row['nacimiento'] ?></td>
                    <td><?php echo $row['direccion'] ?></td>
                    <td><?php echo $row['padre'] ?></td>
                    <td><?php echo $row['madre'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <a href="../controllers/paciente_borrar.php?cui=<?php echo $row['CUI'] ?>"><i class="ri-delete-bin-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<script src="../js/validacion.js"></script>
</html>