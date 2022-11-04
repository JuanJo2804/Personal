<?php

include '../Config/Conexionbd.php';

class Empleado{

protected $nombre_em;
protected $apellido_em;
protected $correo_em;
protected $celular_em;
protected $telefono_em;
protected $direccion_em;
protected $ciudad_em;
protected $tdocumento_em;
protected $ndocumento_em;
protected $nacimiento_em;
protected $civil_em;

protected function GuardarEm(){

    $conexion = new Conexion();

    $sql= "INSERT INTO formulario_em (nombre_em, apellido_em, correo_em, celular_em, telefono_em, direccion_em, ciudad_em, tdocumento_em, ndocumento_em, nacimiento_em, civil_em) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $insertar = $conexion ->stm->prepare($sql);

    $insertar->bindParam(1,$this->nombre_em);
    $insertar->bindParam(2,$this->apellido_em);
    $insertar->bindParam(3,$this->correo_em);
    $insertar->bindParam(4,$this->celular_em);
    $insertar->bindParam(5,$this->telefono_em);
    $insertar->bindParam(6,$this->direccion_em);
    $insertar->bindParam(7,$this->ciudad_em);
    $insertar->bindParam(8,$this->tdocumento_em);
    $insertar->bindParam(9,$this->ndocumento_em);
    $insertar->bindParam(10,$this->nacimiento_em);
    $insertar->bindParam(11,$this->civil_em);
    $insertar-> execute();

}

protected function DeleteEmpleado() {
    $conexion = new Conexion();

    $sql = "DELETE FROM formulario_em WHERE id ='$this->id'";
    $eliminar = $conexion->stm->prepare($sql);
    $eliminar->execute();
}

protected function VerEmpleado() {
    $conexion = new Conexion();

    $sql = "SELECT * FROM formulario_em WHERE id = '$this->id'";
    $ver = $conexion ->stm-> prepare($sql);
    $ver ->execute();
    $empleado = $ver->fetchAll(PDO::FETCH_OBJ);
    return $empleado;
}

protected function UpdateEmpleado() {
    
    $conexion = new Conexion();
    $sql = "UPDATE formulario_em SET nombre_em='$this->nombre_em', apellido_em='$this->apellido_em', correo_em='$this->correo_em', celular_em='$this->celular_em', telefono_em='$this->telefono_em', direccion_em='$this->direccion_em', ciudad_em='$this->ciudad_em', tdocumento_em='$this->tdocumento_em', ndocumento_em='$this->ndocumento_em',nacimiento_em='$this->nacimiento_em', civil_em='$this->civil_em' 
    WHERE id='$this->id'";

    $update = $conexion->stm->prepare($sql);
    $update->execute();

    $empleado = $update->fetchAll(PDO::FETCH_OBJ);
    return $empleado;

}

}



?>