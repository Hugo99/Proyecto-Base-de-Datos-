<?php

include("db.php"); 
include("agrega_articulo.php") ;   
    /*
    tipP=0 - Congreso
    tipP=1 - Revista
    tipP=2 - Informe
    */

    if (isset($_POST['crea_articulo'])){

        $titulo = $_POST['titulo'];
        $palabraClave = $_POST['palabraClave'];
        $email = $_POST['email'];
        $ubCopia = $_POST['ubicacionCopia'];
        $investigador = $_POST['investigador'];
        $fechaPub = $_POST['fechaPub'];
        $pagIn = $_POST['pagIn'];
        $pagFin = $_POST['pagFin'];
        $tipoPub = $_POST['tipoPublicacion'];

        if($tipP == '0'){
            $query  = "INSERT INTO ARTICULO(idARTICULO, titulo, palabrasClave, email, copia, ubicacionCopia, tipoPublicacion, anio, idPublicacion, IdRevista, idINFORME_TECNICO, IdCongreso) VALUES (null,'$titulo','$palabraClave','$email','0','$ubCopia','Congreso','$fechaPub','0',null,null,'$tipoPub')";
            $result = mysqli_query($conn,$query);
        }elseif($tipP == '1'){
            $query  = "INSERT INTO ARTICULO(idARTICULO, titulo, palabrasClave, email, copia, ubicacionCopia, tipoPublicacion, anio, idPublicacion, IdRevista, idINFORME_TECNICO, IdCongreso) VALUES (null,'$titulo','$palabraClave','$email','0','$ubCopia','Revista','$fechaPub','0','$tipoPub',null,null)";
            $result = mysqli_query($conn,$query);
        }else{
            $query  = "INSERT INTO ARTICULO(idARTICULO, titulo, palabrasClave, email, copia, ubicacionCopia, tipoPublicacion, anio, idPublicacion, IdRevista, idINFORME_TECNICO, IdCongreso) VALUES (null,'$titulo','$palabraClave','$email','0','$ubCopia','Informe','$fechaPub','0',null,'$tipoPub',null)";
            $result = mysqli_query($conn,$query);
        }

        if (!$result) {
            die("Query Failed");
        }

        $_SESSION['message'] = 'Se ha Creado el Articulo';
        $_SESSION['message_type'] = "success";

        header("Location: agregar_articulo.php");
    }


?>