<?php
include('db_conection.php');
if(isset($_POST['enviar'])){
    $colegiado = $_POST['colegiado'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $nacimiento = $_POST['fecha'];
    $email = $_POST['correo'];
    $especialidad = $_POST['especialidad'];

    $query = "INSERT INTO medicos VALUES('$colegiado', '$nombre', '$direccion', '$nacimiento', '$email', '$especialidad')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    $_SESSION['message'] = 'Query guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ../views/reg_medico.php");
}
?>