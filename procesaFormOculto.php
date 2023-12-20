<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Datos del formulario</h1>
        <?php
        if (isset($_POST['enviar'])) {

            $nombre = $_POST['nombre'];
            echo "Nombre: " . $nombre . "<br>";

            $arrayOcultoModulos = unserialize($_POST['oculto']);

            echo "Valor oculto: ";
            foreach ($arrayOcultoModulos as $value) {
                echo $value . ",";
            }

            echo "<br>";

            $arrayOcultoNumeros = unserialize($_POST['ocultoNumeros']);

            echo "Numeros ocultos:";

            foreach ($arrayOcultoNumeros as $value) {
                echo $value . " ";
            }

            echo "<br>";

            $arrayOcultoAnimales = explode(";" , $_POST['ocultoAnimales']);

            foreach ($arrayOcultoAnimales as $value) {
                echo ($value);
            }
        }
        ?>

    </body>
</html>