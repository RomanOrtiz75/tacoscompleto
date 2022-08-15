<?php
    $host="localhost:3306";
    $db="tacos_db";
    $usuario="root";
    $contraseña="123456";
    try{
       $conexion = new PDO('mysql:host=' . $host . ';dbname=' . $db .';charset=utf8', $usuario, $contraseña);
       //$conexion = mysqli_connect('localhost:3309', 'root', 'root', 'tacos_db');//
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>    