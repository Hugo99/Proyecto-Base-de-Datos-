<?php

session_start();

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