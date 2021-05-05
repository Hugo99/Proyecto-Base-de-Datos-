<?php

session_start();
$tipP=0;
$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'bibliografia'
);
if (!isset($conn)) {
    echo "error";
}

?>