<?php

    include("config/database.php");

    $sentenciaSQL = $conexion->prepare("SELECT * FROM guisados");
    $sentenciaSQL->execute();
    $listaGuisados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>La Canastera</title>
    <link rel="icon" href="css/media/logo.ico">
    <link rel="stylesheet" href="css/fonts/fonts.css">
    <link rel="stylesheet" href="css/formulary.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body id="cuerpoformularios">
    <!-- barra de navegacion -->
    <nav class="barra">
        <h2>MENU</h2><img class="menuicon" src="css/media/menuicon.png" alt="menuicon">
        <ul>
            <li><a href="sesioniniciada.html">INICIO</a></li>
            <li><a href="menu.html">MENÚ</a></li>
            </li>
        </ul>
    </nav>
<br><br><br><br>
    
    
    <!-- formulario -->
    <form method="POST" class="formularios">
        <h2>Pedido grande</h2>
        <br>
        <br>

            <div class="formulario__grupo">
                <label class="formulario__label">Cantidad:</label>
                    <input type="number" class="formulario__input" name="valor1" id="valor1" placeholder="Numero de tacos:">
            </div>

        <br>

            <div class="">

            <?php 
            foreach ($listaGuisados as $guisado) {
                
                ?>
                <!-- <label class=""><?php //echo $guisado['nombre_guisado'];?></label> -->
                
                <label><input type="checkbox" name="Lista[]" value="<?php echo $guisado['nombre_guisado'];?>"><?php echo $guisado['nombre_guisado'];?></label>
            <?php } ?>
            <br><br>
            <input class="formulario__btn" type="submit" value="Realizar pedido" >
            <br><br>
        </form>
                
 
    </div>
<?php
    $cantidad = $_POST['valor1'];


    require_once 'twilio-php-main/src/Twilio/autoload.php';

    use Twilio\Rest\Client;

    $sid    = "AC27e17aff74634e3f94a70240b1e10531";
    $token  = "80470008ad2326d0693eae0e2bccc50a";
    $twilio = new Client($sid, $token);
        

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ticket2 = [];
        if (!empty($_POST["Lista"])) {
            echo "<script>console.log('en el empty'); </script>";
            $prueba = json_encode($_POST["Lista"]);
            $datos = count($_POST["Lista"]) ;
            foreach ($_POST["Lista"] as $guisos){
                array_push($ticket2, $guisos);
            }
            $cadena = "";
                $datos = count($_POST["Lista"]);
                for ($i = 0; $i < $datos; $i++) {
            $palabra = json_encode($ticket2[$i]);
            $cadena .= "\n" . $palabra . "\n";
            echo "<script>console.log($cadena); </script>";
        };
            $message = $twilio->messages
            ->create(
                "whatsapp:+5214641221085", // to 
                [
                    "from" => "whatsapp:+14155238886",
                    "body" => "Se solicito una cotizacion con la siguiente informacion: \n$cadena \nEl total de tacos del pedido es: $cantidad"
                ]
            ); 
            echo "<script> window.location.href = 'confcoti.html';</script>";
        }else {
//pa cuando no escoje nada
        }

    }

?>

<!-- footer -->
<footer id="footer">
            <div class="contenedorfooter">
                <div class="filas">
                    <div class="footercol">
                        <h4>Correos</h4>
                        <ul>
                            <li><a href="mailto:romanabrahan-ortiz@hotmail.com">romanabrahan-ortiz@hotmail.com</a></li>
                            <li><a href="mailto:elcorreoquequieres@correo.com">ferperezmosqueda@hotmail.com</a></li>
                        </ul>
                    </div>
                    <div class="footercol">
                        <h4>Informacion de Desarrolladores</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/roman.ortiznava2/">Roman Ortiz Nava</a></li>
                            <li><a href="https://www.facebook.com/mariferprzmos">Maria Fernanda Perez Mosqueda</a></li>
                        </ul>
                    </div>
                    <div class="footercol">
                        <h4>Redes Sociales</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/judithaimee.mosqueda"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
            </div>
        </div>
    </footer>


</body>
</html>