<?php
include('db_conection.php');
if(assert($_GET['colegiado'])){
    $colegiado = $_GET['colegiado'];

    $query = "DELETE FROM medico WHERE colegiado = '$colegiado'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query fallido");
    }

    header('Location: ../views/reg_medico.php');
};
?>