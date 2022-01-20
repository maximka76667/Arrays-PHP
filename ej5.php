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
        $nombres = array(
            'neo' => array(
                'nombre' => "Alfredo", 
                'fechaNacimiento' => "12/02/1980", 
                'telefono' => "670123456"), 
            'fran1980' => array(
                'nombre' => "Francisco", 
                'fechaNacimiento' => "20/05/1983", 
                'telefono' => "653234965"),
            'bea' => array(
                'nombre' => "Beatriz", 
                'fechaNacimiento' => "14/08/1975", 
                'telefono' => "663724512")
        );
    
        // Con foreach
        foreach($nombres['bea'] as $nombre) {
            echo "$nombre <br>";
        }

        // Sin foreach
        echo $nombres['bea'][0] . "<br>";
        echo $nombres['bea'][1] . "<br>";
        echo $nombres['bea'][2] . "<br>";
    ?>
</body>
</html>