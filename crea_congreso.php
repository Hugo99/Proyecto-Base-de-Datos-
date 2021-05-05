<?php

include("db.php"); 

if (isset($_POST['crea_congreso'])){
    $nombreCongreso = $_POST['nombreCongreso'];
    $edicionCongreso = $_POST['edicionCongreso'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $frecuencia = $_POST['frecuencia'];
    $primerAnoCongreso = $_POST['primerAnoCongreso'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFinal = $_POST['fechaFinal'];

    $query = "INSERT INTO actas_de_congresos(edicionCongreso,nombreCongreso,ciudad,fechaInicio,fechaFinal,frecuencia,primerAnoCongreso,pais) VALUES ('$edicionCongreso','$nombreCongreso','$ciudad','$fechaInicio','$fechaFinal','$frecuencia','$primerAnoCongreso','$pais')";
    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("Query Failed");
    }

$_SESSION['message'] = 'Se ha Creado el Congreso Satisfactoriamente';
$_SESSION['message_type'] = "success";

    header("Location: agrega_congreso.php");
}


?>