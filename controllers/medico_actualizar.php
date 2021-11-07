<?php
include('db_conection.php');
if(isset($_POST['actualizar'])){
    $colegiado = $_POST['colegiado'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $nacimiento = $_POST['fecha'];
    $email = $_POST['correo'];
    $especialidad = $_POST['especialidad'];

    $query = "UPDATE medicos set colegiado = '$colegiado', nombres = '$nombre', direccion = '$direccion', 
    nacimiento = '$nacimiento', email = '$email', especialidad = '$especialidad' WHERE colegiado = '$colegiado'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    header("Location: ../views/reg_medico.php");
}
?>