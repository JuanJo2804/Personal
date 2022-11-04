<?php 

include '../Models/Empleado.php';


class EmpleadosController extends Empleado{

    public function GuardarEmpleado($nombre_em,$apellido_em, $correo_em, $celular_em, $telefono_em, $direccion_em, $ciudad_em, $tdocumento_em, $ndocumento_em, $nacimiento_em, $civil_em){

        $this->nombre_em = $nombre_em;
        $this->apellido_em = $apellido_em;
        $this->correo_em = $correo_em;
        $this->celular_em = $celular_em;
        $this->telefono_em = $telefono_em;
        $this->direccion_em = $direccion_em;
        $this->ciudad_em = $ciudad_em;
        $this->tdocumento_em = $tdocumento_em;
        $this->ndocumento_em = $ndocumento_em;
        $this->nacimiento_em = $nacimiento_em;
        $this->civil_em = $civil_em;
        $this->GuardarEm();
        $this->VistaList();
    }
    
    public function VistaInsert(){
        include '../Views/Admin/Ingreso_e.php';
    }

    public function VistaList() {
        include '../Views/Admin/Lista_e.php';
    }

    public function VistaActualizar() {
        include '../Views/Admin/Actualizar_e.php';
    }

    public function VerifyDeleteEmpleado($id) {
        $this->id =$id;
        $this->DeleteEmpleado();
        $this->VistaList();
    }

    public function VerifyUpdateEmpleado($id){
        $this->id =$id;
        $this->VerEmpleado();
        include '../Views/Admin/Actualizar_e.php';  
    }

    public function GuardarEmpleadoActualizar($id,$nombre_em,$apellido_em,$correo_em,$celular_em,$telefono_em,$direccion_em,$ciudad_em,$tdocumento_em,$ndocumento_em,$nacimiento_em,$civil_em ){
        $this->id = $id;
        $this->nombre_em = $nombre_em;
        $this->apellido_em = $apellido_em;
        $this->correo_em = $correo_em;
        $this->celular_em = $celular_em;
        $this->telefono_em = $telefono_em;
        $this->direccion_em = $direccion_em;
        $this->ciudad_em = $ciudad_em;
        $this->tdocumento_em = $tdocumento_em;
        $this->ndocumento_em = $ndocumento_em;
        $this->nacimiento_em = $nacimiento_em;
        $this->civil_em = $civil_em;
        $this->UpdateEmpleado();
        $this->VistaList();

    }
    
}


/* --------------------------------estos if son para el registro, listado, actualizar y eliminar empleados-------------------------------- */

if(isset($_GET['action']) && $_GET['action'] == 'insert'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller->VistaInsert();
}

if(isset($_POST['action']) && $_POST['action'] == 'insert'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller->GuardarEmpleado($_POST['nombre_em'],$_POST['apellido_em'], $_POST['correo_em'], $_POST['celular_em'], $_POST['telefono_em'], $_POST['direccion_em'], $_POST['ciudad_em'], $_POST['tdocumento_em'], $_POST['ndocumento_em'], $_POST['nacimiento_em'], $_POST['civil_em']);
}

if(isset($_GET['action']) && $_GET['action'] == 'list'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller->VistaList();
}

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller->VerifyDeleteEmpleado($_GET['id']);
}

if(isset($_GET['action']) && $_GET['action'] == 'update'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller->VerifyUpdateEmpleado($_GET['id']);
}

if(isset($_POST['action']) && $_POST['action'] == 'update'){
    $empleadocontroller = new EmpleadosController();
    $empleadocontroller ->GuardarEmpleadoActualizar($_POST['id'],$_POST['nombre_em'],$_POST['apellido_em'],$_POST['correo_em'],$_POST['celular_em'],$_POST['telefono_em'],$_POST['direccion_em'],$_POST['ciudad_em'],$_POST['tdocumento_em'],$_POST['ndocumento_em'],$_POST['nacimiento_em'],$_POST['civil_em']);
}

?>