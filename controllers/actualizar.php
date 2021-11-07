<?php
include('db_conection.php');
if(isset($_POST['actualizar'])){
    $usuario = $_POST['usuario'];
    $contra = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['email']; 
    $tuser = $_POST['tipo_usuario'];

    $query = "UPDATE usuarios set usuario = '$usuario', pass = '$contra', nombre = '$nombre', correo = '$correo', tpuser = '$tuser' WHERE usuario = '$usuario'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    header("Location: ../views/reg_usuario.php");
}
?>