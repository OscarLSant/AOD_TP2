<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

    <section class= "hero is-medium is-danger">
        <div class="hero-body">
            <p class="title">
                Registro de Películas
            </p>
        </div>
    </section>
    
    <section>
        <?php
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
        ?>
    </section>

    <section>
        
        <?php
            $crearArchivo = fopen("peliculas.txt", "a+");
            fputs($crearArchivo, "<br>Nombre de la película: " . $titulo);
            fputs($crearArchivo, "<br>Descripción: " . $descripcion . "<br>");
            fclose($crearArchivo);
        ?>
    </section>

    <section class="section is medium columns">
    <?php
                $lecturaArchivo = fopen("peliculas.txt", "r");
                while(!feof($lecturaArchivo)){
                    $linea = fgets($lecturaArchivo);
                    echo nl2br($linea);
                }
                fclose($lecturaArchivo);
            ?>
    </section>

</body>
</html>