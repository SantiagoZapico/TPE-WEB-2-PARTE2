<?php
include_once 'app/models/usuarios.model.php';
include_once 'app/views/auth.view.php';
include_once 'app/helpers/auth.helper.php';
class AuthController {
    private $view;
    private $model;
    private $authHelper;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();

        $this->authHelper = new AuthHelper();
    }
    public function mostrarLogin(){
        $this->view->mostrarFormLogin();
    }

    public function loginUser(){
        $email = $_POST['email'];     
        $password = $_POST['password'];
    
        if (empty($email) || empty($password)) {
            $this->view->mostrarFormLogin("Faltan datos obligatorios!");
        }
        
        //obtengo mi user
        $user = $this->model->validarEmail($email);

        // si el user existe y las passwords coinciden:
        if ($user && password_verify($password, $user->password)) {

            $this->authHelper->login($user);
            // redireccion al home 
            header("Location: " . BASE_URL . 'home');
        } else{
            $this->view->mostrarFormLogin("Datos incorrectos!");
        }
    }

    function logout(){
        $this->authHelper->logout();
    }
}