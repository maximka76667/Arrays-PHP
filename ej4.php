<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $nombres = array(
            'neo' => "Alfredo", 
            'fran1980' => "Francisco",
            'bea' => "Beatriz"
        );

        foreach($nombres as $nick => $nombre) {
            echo "$nick: $nombre <br>";
        }
    
    ?>
</body>
</html>