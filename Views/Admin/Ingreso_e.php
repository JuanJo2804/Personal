<?php
    include_once '../Inc/Header.php';
?>

<div class="ui container">
        <div class="">
            <img src="../Public/Img/LOGO_KROMATICA.png" class="image" alt="">
        </div>
        <h2 class="ui h2">Formulario de ingreso de empleados</h2>
        
<br><br>
    <form action="EmpleadoController.php" method="POST" class="ui form">

        <div class="field">
            <label for="">Nombre completo</label>
        </div>

        <div class="two fields">
            <div class="field">
                <input type="text" name="nombre_em" placeholder="Nombre" required>
                <input type="hidden" name="action" value="insert">
            </div>
            <div class="field">
                <input type="text" name="apellido_em" placeholder="Apellido" required>
            </div>
        </div>

        <div class="three fields">
            <div class="field">
                <label for="">Correo electronico</label>
                <input type="email" name="correo_em" required>
            </div>

            <div class="field">
                <label for="">Celular</label>
                <input type="number" name="celular_em" required>
            </div>
            
            <div class="field">
                <label for="">Teléfono</label>
                <input type="number" name="telefono_em" required>
            </div>

        </div>

        <div class="two fields">

            <div class="field">
                <label for="">Dirección</label>
                <input type="text" name="direccion_em" placeholder="Ejem: Calle..." required>
            </div>

            <div class="field">
                <label for="">Ciudad</label>
                <input type="text" name="ciudad_em" required>
            </div>
        </div>

        <div class="four fields">

            <div class="field">
                <label for="">Tipo de documento</label>
                <input type="text" name="tdocumento_em" required>
            </div>

            <div class="field">
                <label for="">Numero de documento</label>
                <input type="number" name="ndocumento_em" required>
            </div>

            <div class="field">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="nacimiento_em" required>
            </div>

            <div class="field">
                <label for="">Estado civil</label>
                <input type="text" name="civil_em" required>
            </div>
        </div>

        <div class="field">
            <input class="ui olive button" type="submit" value="Enviar">
        </div>
    </form>

    </div>


<?php 
    include '../Inc/Footer.php';
?>