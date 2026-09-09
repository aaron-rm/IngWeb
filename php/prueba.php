<?php
$nombre = "Aaron";
$fecha = date("d/m/Y H:i:s");
$numeroAleatorio = random_int(1, 100);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 50px auto;
            padding: 24px;
            background: #f3f6fa;
        }

        main {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 14px #0002;
        }

        h1 {
            color: #2563eb; 
        }
        .dato {
            padding: 12px;
            background: #eef4ff;
            border-left: 4px solid #2563eb;
            margin: 12px 0;
        }
    </style>
</head>
<body>
    <main>
        <h1>¡PHP funciona correctamente!</h1>

        <p>Esta parte es HTML normal.</p>

        <div class="dato">
            Hola, <strong><?= htmlspecialchars($nombre) ?></strong>.
        </div>

        <div class="dato">
            Fecha y hora del servidor: <?= $fecha ?>
        </div>

        <div class="dato">
            Número aleatorio generado con PHP: <?= $numeroAleatorio ?>
        </div>
    </main>
</body>
</html>