<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar formulario en archivo de texto plano</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class= "hero is-medium is-primary">
        <div class="hero-body">
            <p class="title">
                Películas
            </p>
        </div>
    </section>

    <section class="section">
        <div class="column">
            <form action="guardar.php" method="post">
                <div>
                    <label><br>Titulo: </label>
                    <input type="text" class="input" name="titulo" placeholder="Escribe el título de la película">
                </div>

                <div>
                    <label><br>Descripción: </label>
                    <textarea class="input" name="descripcion" placeholder="Agregue descipcioón del apelícula"></textarea>
                </div>
                <br><input type="submit" class="button is-link" value="Guardar">
            </form>
        </div>
    </section>
    
</body>
</html>
