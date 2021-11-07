<?php
include('db_conection.php');
if(isset($_POST['enviar'])){
    $usuario = $_POST['usuario'];
    $contra = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['email']; 
    $tuser = $_POST['tipo_usuario'];

    $query = "INSERT INTO usuarios(usuario, pass, nombre, correo, tpuser) VALUES('$usuario', '$contra', '$nombre', '$correo', '$tuser')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query fallido');
    }

    $_SESSION['message'] = 'Query guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ../views/reg_usuario.php");
}
?>