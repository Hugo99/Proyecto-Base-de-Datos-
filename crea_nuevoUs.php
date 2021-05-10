<?php

include("db.php"); 

if (isset($_POST['crea_nuevoUs'])){
    $usuario = $_POST['usuario'];
    $pass =  $_POST['pass'];

    $query = "INSERT INTO `usuarios`(`usuario`, `password`) VALUES ('$usuario','$pass')";
    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Se ha Creado el Congreso Satisfactoriamente';
    $_SESSION['message_type'] = "success";

    header("Location: registra.php");
}


?>