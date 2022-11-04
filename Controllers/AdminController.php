<?php

include '../Models/Admin.php';


class AdminController extends Admin{

    public function RedirectStartlogin(){
        // esta funcion es la que permite verificar si los datos ingresados en el inicio de sesion estan 
        $usuarioinfo = $this->ConsultarAdBd();

        foreach ($usuarioinfo as $usuario_ad){}
        if(!empty($usuarioinfo)){
            // var_dump($usuarioinfo);
            echo 'No has iniciado sesion';
            
        }

        else{
            include_once '../Views/Admin/Ingreso_e.php';
        }
        

    }

    public function RedirectStart(){

        $usuarioinfo = $this->ConsultarAdBd();

        foreach ($usuarioinfo as $usuario_ad){}
        if(empty($usuarioinfo)){
            // var_dump($usuarioinfo);
            echo 'No has iniciado sesion';
            
        }

        else{
            include_once '../Views/Admin/Ingreso_e.php';
        }
        

    }

/* 
    public function RedirectPerfil() {
        include_once '../Views/Usuario/PerfilUsuario.php'; 
    } */
/* 
    public function RedirectConfig(){
        include_once '../Views/Usuario/ConfigUsuario.php'; 
    } */

    /* public function DeletePerfil($id_u){
        $this->id_u = $id_u;
        $this->DeleteUsuario();
        // $this->Redir();
    } */
    
/*     public function Redir(){
        header('Location: UsuarioController.php?action=start');
    }
 */
    public function ListInformation($correo_ad,$nombre_ad,$apellidos_ad,$contrasenaencripted){
        
        $this->nombre_ad = $nombre_ad;
        $this->apellidos_ad = $apellidos_ad;
        $this->correo_ad = $correo_ad;
        $this->contrasena_ad = $contrasenaencripted;

        $this->GuardarAd();
        $this->RedirectStart();
        
        // echo 'success';           

    }

    public function VerifyLogin($correo_ad,$contrasena_ad){
        $this->correo_ad = $correo_ad;
        $this->contrasena_ad = $contrasena_ad;
        $usuarioinfo = $this->ConsultarAdBd();

        if($usuarioinfo != null){ 
            foreach ($usuarioinfo as $usuario_ad){}
            if(password_verify($contrasena_ad, $usuario_ad->contrasena_ad)){
                // echo 'Contraseña Correcta';
                
                $_SESSION['id_register'] = $usuario_ad->id_u;
                $_SESSION['correo_ad'] = $usuario_ad->correo_ad;
    
    
    
                header('Location: AdminController.php?action=start');
            }
    
            else{
                // var_dump($usuarioinfo);
                die ('No te has registrado aún');
            }
        }
        else {
            die ('no se pudo ingresar a la pagina');
        }


    }

/*     public function Update(){
        $id = $_SESSION['id_u'];
        $nombre_ad = $_SESSION['nombre_ad'];
        $correo_ad = $_SESSION['correo_ad'];
        $personas = $this->UpdateUsuario($id,$nombre_ad,$correo_ad);
    } */

}


/* -------------------------todas estos if son para el registro e inicio de sesion del admin ------------------------------------------*/
if(isset($_GET['action']) && $_GET['action'] == 'start'){
    $usuariocontroller = new AdminController();
    $usuariocontroller->RedirectStartlogin();
}

if(isset($_GET['action']) && $_GET['action'] == 'insertar'){
    $usuariocontroller = new AdminController();
    $usuariocontroller->RedirectStart();
}

if(isset($_POST['action']) && $_POST['action'] == 'verificar'){
    $usuariocontroller = new AdminController();
    $usuariocontroller->VerifyLogin($_POST['correo_login'], $_POST['contrasena_login']);
}

if(isset($_POST['action']) && $_POST['action'] == 'registro'){
    $usuariocontroller = new AdminController();
    $contrasenaencripted = password_hash($_POST['contrasena_ad'],PASSWORD_ARGON2ID);
    $usuariocontroller->ListInformation($_POST['correo_ad'], $_POST['nombre_ad'], $_POST['apellido_ad'], $contrasenaencripted);
}

?>
