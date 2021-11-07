<?php
include('db_conection.php');
if(isset($_POST['enviar'])){
    $cui = $_POST['cui'];
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $fecha = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $padre = $_POST['padre'];
    $madre = $_POST['madre'];
    $correo = $_POST['email'];

    $query = "INSERT INTO pacientes VALUES($cui, '$nombres', '$apellidos', '$fecha', '$direccion', '$padre', '$madre', '$correo')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    $_SESSION['message'] = 'Query guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ../views/reg_paciente.php");
}
?>