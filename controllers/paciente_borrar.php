<?php
include('db_conection.php');
if(assert($_GET['cui'])){
    $cui = $_GET['cui'];

    $query = "DELETE FROM pacientes WHERE CUI = $cui";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query fallido");
    }

    header('Location: ../views/reg_paciente.php');
};
?>