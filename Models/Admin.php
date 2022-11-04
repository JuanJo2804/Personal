<?php

include '../Config/Conexionbd.php';


class Admin{
    protected $nombre_ad;
    protected $apellidos_ad;
    protected $correo_ad;
    protected $contrasena_ad;

    protected function GuardarAd(){

        $conexion = new Conexion();
        

        $sql ="INSERT INTO registro_ad (nombre_ad, apellido_ad, correo_ad, contrasena_ad) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);

        $insertar->bindParam(1,$this->nombre_ad);
        $insertar->bindParam(2,$this->apellidos_ad);
        $insertar->bindParam(3,$this->correo_ad);
        $insertar->bindParam(4,$this->contrasena_ad);
        $insertar->execute();


    }

    protected function ConsultarAdBd(){

        $conexion = new Conexion();

        $sql = "SELECT * FROM registro_ad WHERE correo_ad='$this->correo_ad'";

            $usuario = $conexion->stm->prepare($sql); 
            $usuario->execute();
      
            $usuarioobjeto = $usuario->fetchAll(PDO::FETCH_OBJ);
            return $usuarioobjeto;

    }
}


?>