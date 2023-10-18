<?php

class AuthHelper{

    public function __construct(){
        session_start();
    }
    // Barrera de seguridad para usuario logueado 
    function checkLogged(){
        
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }
    }

    function logout(){
        
        session_destroy();
        header('Location: '. BASE_URL .'login');
    }

    function login($user){
        // armo la sesion del usuario
        
        // estan en mayusculas xq serian como constantes de sesión
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL_USER'] = $user->email;        
    }
}