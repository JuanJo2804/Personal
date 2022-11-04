<?php 

include '../Inc/Header.php'; 

$id = $_GET['id'];

$conexion = new Conexion();
$sql = "SELECT * FROM formulario_em WHERE id = $id";

$consulta = $conexion->stm->prepare($sql);
$consulta->execute();

$empleado = $consulta->fetchAll(PDO::FETCH_OBJ);

foreach ($empleado as $e){}
?>


<div class="ui container">
        <div class="">
            <img src="../Public/Img/LOGO_KROMATICA.png" class="image" alt="">
        </div>
        <h2 class="ui h2">Actualización de datos</h2>
        
<br><br>
    <form action="EmpleadoController.php" method="POST" class="ui form">

        <div class="field">
            <label for="">Nombre completo</label>
        </div>

        <div class="two fields">
            <div class="field">
                <input type="text" name="nombre_em" value="<?php echo $e->nombre_em; ?>" required>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?php echo $e-> id;?>">
            </div>
            <div class="field">
                <input type="text" name="apellido_em" value="<?php echo $e->apellido_em; ?>" required>
            </div>
        </div>

        <div class="three fields">
            <div class="field">
                <label for="">Correo electronico</label>
                <input type="email" name="correo_em" value="<?php echo $e->correo_em; ?>" required>
            </div>

            <div class="field">
                <label for="">Celular</label>
                <input type="number" name="celular_em" value="<?php echo $e->celular_em; ?>" required>
            </div>
            
            <div class="field">
                <label for="">Teléfono</label>
                <input type="number" name="telefono_em" value="<?php echo $e->telefono_em; ?>" required>
            </div>

        </div>

        <div class="two fields">

            <div class="field">
                <label for="">Dirección</label>
                <input type="text" name="direccion_em" value="<?php echo $e-> direccion_em; ?>" required>
            </div>

            <div class="field">
                <label for="">Ciudad</label>
                <input type="text" name="ciudad_em" value="<?php echo $e-> ciudad_em; ?>" required>
            </div>
        </div>

        <div class="four fields">

            <div class="field">
                <label for="">Tipo de documento</label>
                <input type="text" name="tdocumento_em" value="<?php echo $e-> tdocumento_em; ?>" required>
            </div>

            <div class="field">
                <label for="">Numero de documento</label>
                <input type="number" name="ndocumento_em" value="<?php echo $e-> ndocumento_em; ?>" required>
            </div>

            <div class="field">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="nacimiento_em" value="<?php echo $e-> nacimiento_em; ?>" required>
            </div>

            <div class="field">
                <label for="">Estado civil</label>
                <input type="text" name="civil_em" value="<?php echo $e-> civil_em; ?>" required>
            </div>
        </div>

        <div class="field">
            <input class="ui olive button" type="submit" value="Enviar">
        </div>
    </form>

    </div>

















<?php include '../Inc/Footer.php'; ?>