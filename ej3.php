<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $electros = array("c", "j", "g", "b");

        sort($electros);

        foreach($electros as $i => $electro) {
            echo "$electro <br>";
        }
    ?>
</body>
</html>