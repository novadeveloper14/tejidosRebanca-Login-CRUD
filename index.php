<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2ef3fe6e41.js" crossorigin="anonymous"></script>
        <script src="js/preview.js"></script>
        <link rel="stylesheet" href="estilos.css">
        <link rel="icon" href="ima/icono.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/402bbae3b2.js" crossorigin="anonymous"></script>
        <title>Ingreso a Tejidos Rebanca</title>
    </head>

    <body onload="nobackbutton();">
        <div id="contenedor">


          <form action="validar.php" method="post">
            <div id="preguntas">

                <div id="imagen">
                    <img src="ima/icono.png">
                </div>

                <div class="preg" id="pregnombre">
                <input type="text" required placeholder="Usuario o Email" name="usuario">
                </div>

                <div class="preg" id="pregcontra">
                    <input type="password" required placeholder="Contraseña" name="password">
                </div>

                <div id="forget-password">
                    <a href="olvidar-C/index.php">¿Has olvidado tu contraseña?</a>
                </div>

                <div id="botones">
                <div class="btn" id="submit">
                <input type="submit" required value="Ingresar">
                </div>

                <div class="btn" id="restablecer">
                <input type="reset" value="Borrar">
                </div>

                </div>

               </form>
            </div>
        </div>
    </body>
</html>