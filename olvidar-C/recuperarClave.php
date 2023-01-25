<?php
include('verificarDatos/config.php');

//Generando clave aleatoria
$logitudPass = 4;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);
$clave       = $miPassword;

$correo             = trim($_REQUEST['gmail']); //Quitamos algun espacion en blanco
$consulta           = ("SELECT * FROM empleados WHERE gmail ='".$correo."'");
$queryconsulta      = mysqli_query($con, $consulta);
$cantidadConsulta   = mysqli_num_rows($queryconsulta);
$dataConsulta       = mysqli_fetch_array($queryconsulta);

if($cantidadConsulta == 0){ 
    ?>
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

<div class="alert show showAlert" style="background: #ff0000;">
               <strong> Ops.! </strong>
               El Correo no Existe, por favor Verifique.
</div>



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
<?php
}else{
$updateClave    = ("UPDATE empleados SET contraseña='$clave' WHERE gmail='".$correo."' ");
$queryResult    = mysqli_query($con,$updateClave); 

$destinatario = $correo; 
$asunto       = "Recuperando Clave - WebDeveloper";
$cuerpo = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Recuperar Clave de Usuario</title>';
$cuerpo .= ' 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .btnlink{
        padding:15px 30px;
        text-align:center;
        background-color:#cecece;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
    }
    .btnlink:hover{
        color: #fff !important;
    }
    .imgBanner{
        width:100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px;
    }
    .misection{
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: center;
        font-family: sans-serif;
    }
    .mt-5{
        margin-top:50px;
    }
    .mb-5{
        margin-bottom:50px;
    }
    </style>
';

$cuerpo .= '
</head>
<body>
    <div class="contenedor">
   
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
       
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
            <h2 style="color: red; margin: 0 0 7px">Recuperacion de clave tejidos rebanca,</h2>
                <h2 style="color: red; margin: 0 0 7px">Hola, '.$dataConsulta['nombreUsuario'].'</h2>
                <p style="margin: 2px; font-size: 18px">te hemos creado una nueva clave temporal para que puedas iniciar sesión, la clave temporal es: <strong>'.$clave.'</strong> </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <a href="https://jnovag.000webhostapp.com/" class="btnlink">Iniciar Sesión </a>
                <p>&nbsp;</p>
                 <p>&nbsp;</p>
                <img style="padding: 0;" src="https://soy.boyaca.gov.co/wp-content/uploads/2021/07/088-Tejidos-Rebanca.jpg" width="50%">
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>
</table>'; 

$cuerpo .= '
      </div>
    </body>
  </html>';
    
    $headers  = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $headers .= "From: WebDeveloper\r\n"; 
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:"; 
    (mail($destinatario,$asunto,$cuerpo,$headers));
    ?>
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

<div class="alert show showAlert" style=" background: #0ba900;">
          <strong> Felicitaciones! </strong>
          Su clave fue cambiada, revise su correo.
   </div>



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
<?php
    exit();
}

?>
