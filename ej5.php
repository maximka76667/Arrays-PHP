<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        function createArray($nombre, $fecha, $tlf) {
            return array(
                'nombre' => $nombre, 
                'fechaNacimiento' => $fecha, 
                'telefono' => $tlf
            );
        }

        $nombres = array(
            'neo' => createArray(
                "Alfredo", 
                "12/02/1980", 
                "670123456"
            ), 
            'fran1980' => createArray(
                "Francisco", 
                "20/05/1983", 
                "653234965"
            ),
            'bea' => createArray(
                "Beatriz", 
                "14/08/1975", 
                "663724512"
            )
        );

        // Con foreach
        foreach($nombres['bea'] as $nombre) {
            echo "$nombre <br>";
        }

        // Sin foreach
        echo $nombres['bea']['nombre'] . "<br>";
        echo $nombres['bea']['fechaNacimiento'] . "<br>";
        echo $nombres['bea']['telefono'] . "<br>";
    ?>
</body>
</html>