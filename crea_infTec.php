<?php

include("db.php"); 

if (isset($_POST['crea_infTec'])){
    $numero = $_POST['numero'];
    $ubicacion =  $_POST['ubicacion'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO `INFORME_TECNICO`(`idINFORME_TECNICO`, `numero`, `ubicacion`, `fecha`) VALUES (null,'$numero','$ubicacion','$fecha')";
    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Se ha Creado el Congreso Satisfactoriamente';
    $_SESSION['message_type'] = "success";

    header("Location: agrega_infTec.php");
}


?>