<?php
session_start();

include("db.php"); 

$name = $_POST['name'];
$pass = $_POST['pass'];
$s = "SELECT * FROM `usuarios` WHERE `usuario` = $name  && `password` = $pass";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username'] = $name;
   header('location:index.php');
}else{
    header('location:vista_tablas.php');
}
?>