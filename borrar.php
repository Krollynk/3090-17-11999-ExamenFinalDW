<?php
include('db_conection.php');
if(assert($_GET['user'])){
    $usuario = $_GET['user'];

    $query = "DELETE FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query fallido");
    }

    header('Location: reg_usuario.php');
};
?>