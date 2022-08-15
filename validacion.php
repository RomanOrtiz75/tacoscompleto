<?php
$campo_nombre = True;
$campo_apellidop = True;
$campo_apellidom = True;
$campo_password = True;
$campo_password2 = True;
$campo_correo = True;
$campo_telefono = True;
$name = $lastname = $email = $password = $phone = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) { 
        echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__nombre .formulario__input-error`).classList.add("formulario__input-error-activo");</script>';
        $campo_nombre = False;
    } else {
        $name = test_input($_POST["nombre"]);
        if (!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $name)) {
            echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__nombre .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
            $campo_nombre = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__nombre`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__nombre i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__nombre .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }

    if (empty($_POST["correo"])) {
        echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__correo .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
        $campo_correo = False;
    } else {
        $email = test_input($_POST["correo"]);
        if (!preg_match("/^[a-zA-Z0-9.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email)) {
            echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__correo .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
            $campo_correo = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__correo`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__correo i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__correo .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }


    if (empty($_POST["apellidop"])) {
        echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidop .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
        $campo_apellidop = False;
    } else {
        $lastname = test_input($_POST["apellidop"]);
        if (!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $lastname)) {
            echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
            $campo_apellidop = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__apellidop`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidop .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }


    if (empty($_POST["apellidom"])) {
        echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__apellidom .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
        $campo_apellidop = False;
    } else {
        $lastname = test_input($_POST["apellidom"]);
        if (!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $lastname)) {
            echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
            $campo_apellidop = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__apellidom`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__apellidom .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }


    if (empty($_POST["password"])) {
        echo '<script language="javascript">document.getElementById(`grupo__password`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__password`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__password .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
        $campo_password = False;
    }
     else {
        $password = test_input($_POST["password"]);
        if (!preg_match(" /^.{4,12}$/ ", $password)) {
            echo '<script language="javascript">document.getElementById(`grupo__password`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__password`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password .formulario__input-error`).classList.add("formulario__input-error-activo");</script>';     
            $campo_password = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__password`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__password`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__password i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__password .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }

    if (($_POST["password"]) !== ($_POST["password2"])) {
        $campo_password2 = False;
        echo '<script language="javascript">document.getElementById(`grupo__password2`).classList.add("formulario__grupo-incorrecto");</script>'; 
        echo '<script language="javascript">document.getElementById(`grupo__password2`).classList.remove("formulario__grupo-correcto");</script>'; 
        echo '<script language="javascript">document.querySelector(`#grupo__password2 i`).classList.add("fa-times-circle");</script>'; 
        echo '<script language="javascript">document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");</script>'; 
        echo '<script language="javascript">document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
    }
        else {
            echo '<script language="javascript">document.getElementById(`grupo__password2`).classList.remove("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__password2`).classList.add("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password2 i`).classList.remove("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password2 i`).classList.add("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }

    if (empty($_POST["telefono"])) {
        echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.add("formulario__grupo-incorrecto");</script>'; 
		echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.remove("formulario__grupo-correcto");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.add("fa-times-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.remove("fa-check-circle");</script>'; 
		echo '<script language="javascript">document.querySelector(`#grupo__telefono .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
        $campo_telefono = False;
    } else {
        $phone = test_input($_POST["telefono"]);
        if (!preg_match(" /^\d{7,14}$/ ", $phone)) {
            echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.add("formulario__grupo-incorrecto");</script>'; 
            echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.remove("formulario__grupo-correcto");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.add("fa-times-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.remove("fa-check-circle");</script>'; 
            echo '<script language="javascript">document.querySelector(`#grupo__telefono .formulario__input-error`).classList.add("formulario__input-error-activo");</script>'; 
            $campo_telefono = False;
        } else {
            echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.remove("formulario__grupo-incorrecto");</script>';
            echo '<script language="javascript">document.getElementById(`grupo__telefono`).classList.add("formulario__grupo-correcto");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.add("fa-check-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__telefono i`).classList.remove("fa-times-circle");</script>';
            echo '<script language="javascript">document.querySelector(`#grupo__telefono .formulario__input-error`).classList.remove("formulario__input-error-activo");</script>';
        }
    }


    include("config/database.php");
    if ($campo_nombre && $campo_apellidop && $campo_password && $campo_correo && $campo_telefono && $campo_password2) {
        $nombre = $_POST['nombre'];
        $apellidoP = $_POST['apellidop'];
        $apellidoM = $_POST['apellidom'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $query = $conexion->prepare(
            "INSERT INTO usuarios(nombre,apellido_p,apellido_m,telefono,correo,password)
                    VALUES(:nombre,:apellidop,:apellidom,:telefono,:correo,:password)"
        );
        $query->bindParam(":nombre", $nombre);
        $query->bindParam(":apellidop", $apellidoP);
        $query->bindParam(":apellidom", $apellidoM);
        $query->bindParam(":telefono", $telefono);
        $query->bindParam(":correo", $correo);
        $query->bindParam(":password", $password);
        $query->execute(); {
            echo '<script language="javascript">document.getElementById("formulario__mensaje-exito").classList.add("formulario__mensaje-exito-activo");</script>';
        }
    } else {
        echo '<script language="javascript">document.getElementById("formulario__mensaje").classList.add("formulario__mensaje-activo");</script>';
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>

<body>

</body>

</html>