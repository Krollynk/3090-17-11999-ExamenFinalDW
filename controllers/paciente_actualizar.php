<?php
include('db_conection.php');
if(isset($_POST['actualizar'])){
    $cui = $_POST['cui'];
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $fecha = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $padre = $_POST['padre'];
    $madre = $_POST['madre'];
    $correo = $_POST['email'];

    $query = "UPDATE pacientes set CUI = '$cui', nombres = '$nombres', apellidos = '$apellidos', nacimiento = '$fecha', 
    direccion = '$direccion', padre = '$padre', madre = '$madre', email = '$correo'  WHERE CUI = '$cui'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    header("Location: ../views/reg_paciente.php");
}
?>