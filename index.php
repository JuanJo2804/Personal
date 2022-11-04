<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Public/Css/semantic.css">
    <link rel="stylesheet" href="Public/Css/estillo.css">
    <!-- <link rel="stylesheet" href="./Public/Css/semantic.css"> -->
    <!-- <link rel="stylesheet" href="./Public/Css/estillo.css"> -->

    <script src="Public/Js/jquery-3.1.1.min.js"></script>
    <script src="Public/Js/semantic.js"></script>
    <!-- <script src="./Public/Js/jquery-3.1.1.min.js"></script> -->
    <!-- <script src="./Public/Js/semantic.js"></script> -->
    <title>KromaticaPublicidad</title>
</head>
<body>
    <div class="ui stackble menu massive">
        <div class="item">
            <img src="Public/Img/LOGO_KROMATICA1.png" alt="">
        </div>
    </div>
<div class="ui placeholder segment">
  <div class="ui two column very relaxed stackable grid">
    <div class="column">
      <div class="ui form">
        <div class="field">
            <h1>Inicio de sesion</h1>
        <form action="Controllers/AdminController.php" method="POST">
          <label>Correo electronico</label>
          <div class="ui left icon input">
            <input type="email" placeholder="Correo" name="correo_login" required>
            <input type="hidden" name="action" value="verificar">
          </div>
        </div>
        <div class="field">
          <label>Contraseña</label>
          <div class="ui left icon input">
              <input type="password" placeholder="Contraseña" name="contrasena_login" required>
            </div>
        </div>
        <input class="ui green submit button" value="Entrar" type="submit">
    </form>
      </div>
    </div>

    <div class="middle aligned column">
        <div class="ui container center aligned">
            <h1>Registro</h1>
            <form class="ui form" action="Controllers/AdminController.php" method="POST">
                <div class="three fields">
                    <div class="field"></div>

                    <div class="field">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre_ad" id="" required> 
                        <input type="hidden" name="action" value="registro">
                    </div>

                    <div class="field"></div>
                </div> 

                <div class="three fields">
                    <div class="field"></div>

                    <div class="field">
                        
                        <label for="">Apellido</label>
                        <input type="text" name="apellido_ad" id="" required>
                    </div>

                    <div class="field"></div>
                </div> 

                <div class="three fields">
                    <div class="field"></div>

                    <div class="field">
                        <label for="">Correo electronico</label>
                        <input type="email" name="correo_ad" id="" required>
                    </div>

                    <div class="field"></div>
                </div>

                <div class="three fields">
                    <div class="field"></div>

                    <div class="field">
                        <label for="">Contraseña</label>
                        <input type="password" name="contrasena_ad" required>
                    </div>

                    <div class="field"></div>
                </div>   
                <input class="ui green submit button" type="submit" value="Registrarme"> 
            </form>
        </div>
    </div>
</div>
<div class="ui vertical divider">Or</div>
</div>

</body>
<script>
    $('.ui.dropdown').dropdown();
</script>
</html>