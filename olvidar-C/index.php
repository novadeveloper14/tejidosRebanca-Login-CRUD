<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Login con PHP y MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="ima/image.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">
    <script src="https://kit.fontawesome.com/df8efacf72.js" crossorigin="anonymous"></script>


  </head>
  <body>

<div id="contenedor">      
    <div id="recuperarclave">
            <h1 class="text-center mb-5 recuperarPass">
                Recuperar tu Clave
            </h1>
            </div> 
      <div id="imagen">
                    <img src="https://boletas.ipen.gob.pe/dist/img/forgot-password.png">
                </div>
  
        


            <form action="recuperarClave.php" method="post">
                <div class="field-wrap">
                    <input type="email" name="gmail" required placeholder="Ingresa gmail"  autocomplete="off"/>
                </div>
                
              
                <div class="btn" id="submit">
                <input type="submit" class="button button-block miBtn mt-5" value="Enviar"/>
                </div>
                <div class="volver">
                <a href="../index.php" id="volver" class="mt-3 mb-4" title="Volver"><i class="fas fa-chevron-left"></i>Volver</a>
                </div>
                <br><br>
            </form>
    

    </div>
</div>
</div>  
</div>
</div>  



  </body>
</html>