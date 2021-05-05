<?php

include("db.php"); 

if (isset($_POST['crea_investigador'])){
    $nombre = $_POST['nombre'];
    $email =  $_POST['correo'];

    $query = "INSERT INTO `AUTOR`(`idAUTOR`, `nombre`, `correo`) VALUES (null,'$nombre','$email')";
    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Se ha Creado el Congreso Satisfactoriamente';
    $_SESSION['message_type'] = "success";

    header("Location: agrega_investigador.php");
}


?>