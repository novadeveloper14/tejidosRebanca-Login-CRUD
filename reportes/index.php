<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SendMail with PHP || JCode</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
  <script>
    function volver(){
      window.history.back();
    };
  </script>
            <div id="logo">
                <a href="#" onclick="volver()">
                    <img src="images/angle-left-solid.svg">
                    <p>Volver</p>
                </a>
            </div>
            <div id="perfil">
            <button class="ingresar-email" id="ingresar-email">Ingresar Email</button>
            </div>
        </header>


  <section class="mail w-100">


            <div class="card-body">
              <!-- Formulario -->
              <form id="form-mail" class="mt-3">
              <h2>Reportes <i class="fas fa-briefcase"></i></h2>
              <div class="preg" id="preg-nombre">
                    <input type="text" required id="nombre" placeholder="Escribe tu nombre..." name="nombre">
                    </div>
                    <div class="preg" id="preg-nombre">
                    <input type="text" class="form-control" id="telefono" placeholder="Escribe tu telefono.." name="telefono">
                    </div>
                    <div class="preg" id="preg-biografia">
                    <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Escribe cual es tu reporte..."></textarea>
                    </div>
                    <div class="preg" id="preg-nombre">
                    <input type="email" class="form-control" id="correo" placeholder="Escribe tu correo..." name="correo">
                    </div>


                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" required value="Enviar">
                        </div>

                        <div class="btn" id="restablecer">
                            <input type="reset" value="Eliminar">
                        </div>
                    </div>
                
              </form>
              <!-- Formulario -->
            </div>
          </div>
          <!-- CARD -->
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="Controller/mail.js"></script>
</body>
</html>