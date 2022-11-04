<?php include '../Inc/Header.php'; ?>

<?php
$conexion = new Conexion();
$sql = "SELECT * FROM formulario_em";

$consulta = $conexion->stm->prepare($sql);
$consulta->execute();

$empleado = $consulta->fetchAll(PDO::FETCH_OBJ);
?>

<div class="ui container">
    <br>
    <h1>Tabla de actualización de datos y eliminar empleados</h1>
    <br>
    <table class="ui selectable inverted table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Telefono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Tipo de documento</th>
            <th>Numero de documento</th>
            <th>Fecha de nacimiento</th>
            <th>Estado Civil</th>
            <th>Proceso</th>
        </tr>
        <?php foreach ($empleado as $e){ ?>
        <tr>
            <td><?php echo $e -> nombre_em?></td>
            <td><?php echo $e -> apellido_em?></td>
            <td><?php echo $e -> correo_em?></td>
            <td><?php echo $e -> celular_em?></td>
            <td><?php echo $e -> telefono_em?></td>
            <td><?php echo $e -> direccion_em?></td>
            <td><?php echo $e -> ciudad_em?></td>
            <td><?php echo $e -> tdocumento_em?></td>
            <td><?php echo $e -> ndocumento_em?></td>
            <td><?php echo $e -> nacimiento_em?></td>
            <td><?php echo $e -> civil_em?></td>
            <td>
              <a onclick="UpdateEmpleado(<?php echo $e->id; ?>)"><button class="ui green button">Actualizar</button></a>
              <button class="ui red button" onclick="borrar(<?php echo $e->id; ?>)">Borrar</button>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>
<script src="../Public/Js/alertaHD.js"></script>
  <script>
      var id
      function borrar(id){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
          setTimeout(function(){
          location.href = 'EmpleadoController.php?action=delete&id=' + id;}, 1500); 
        }
          else {
          swal("Your imaginary file is safe!");
        }
      });
  }

      function UpdateEmpleado(id){
        location.href = 'EmpleadoController.php?action=update&id=' + id;
      }



  </script>




<?php include '../Inc/Footer.php'; ?>