<?php
require_once 'libs/libs/Smarty.class.php';

class AuthView {

    function mostrarFormLogin($error = null){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/formLogin.tpl');
    }
}