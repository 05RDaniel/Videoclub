<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Test de clases</h1>
    <?php
        include "Soporte.php";
       $unJuego = new Soporte("Red dead redemption 2", 26, 35);

       $unJuego->muestraResumen();
    ?>
</body>
</html>