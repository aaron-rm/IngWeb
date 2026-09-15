<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Clase 1</title>
    </head>
    <body>
        <main>
            <?php
                echo "Se puede usar echo para mostrar texto en pantalla <br>";
                print ("Se puede usar print para mostrar texto en pantalla <br>");
                printf ("También se puede usar printf para mostrar texto en pantalla <br>");
            ?>
            <br>
            Variables
            Se utiliza $, debe empezar con letra
            <?php
                $nombre = "Juan";
                $edad = 30;
                echo "Mi nombre es $nombre y tengo $edad años <br>";
            ?>
            
        </main>
    </body>
</html>