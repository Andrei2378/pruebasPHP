<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $arrayModulos = [
            "Programacion",
            "Base de Datos",
            "Lenguaje de Marcas",
            "Sistemas Informaticos",
            "Formacion Orientacion Laboral"
        ];

        $numeros = [1, 2, 3, 4, 5, 6];

        $arrayAnimales = [
            "perro",
            "gato",
            "gallina",
            "lagarto"
        ];

        $numeros2 = [3, 6, 3, 2, 6, 7, 3];
        ?>

        <form action="procesaFormOculto.php" method="POST" >


            <input type="text" name="nombre" />
            <input type="hidden" name="oculto" value='<?php echo serialize($arrayModulos); ?>' />
            <input type="hidden" name="ocultoNumeros" value="<?php echo serialize($numeros); ?>" />
            <input type="hidden" name="ocultoAnimales" value="<?php echo implode(",", $arrayAnimales); ?>" />

            <input type="submit" name="enviar" value="Enviar" />

        </form>
    </body>
</html>
