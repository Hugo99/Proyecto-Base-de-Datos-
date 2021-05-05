<?php

include("db.php"); 

if (isset($_POST['crea_Revista'])){
    $nombre = $_POST['nombreRev'];
    $nombreEdit =  $_POST['nombreEdit'];
    $frecuencia = $_POST['frecuencia'];
    $temas =  $_POST['temas'];

    $query = "INSERT INTO `REVISTA_CIENTIFICA`(`idREVISTA_CIENTIFICA`, `nombreRevista`, `nombreEditor`, `frecuencia`, `temas`) VALUES (null,'$nombre','$nombreEdit','$frecuencia','$temas')";
    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Se ha Creado el Congreso Satisfactoriamente';
    $_SESSION['message_type'] = "success";

    header("Location: Agrega_RevistaCient.php");
}


?>