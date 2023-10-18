<?php
require_once 'libs/libs/Smarty.class.php';

class TablaPrendasView
{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "PRADO");
    }

    function mostrarTablaPrendas($tabla)
    {
        $this->smarty->assign('tabla', $tabla);
        $this->smarty->display('templates/tablaPrendas.tpl');

    }

    //FUNCION PARA MOSTRAR ERROR
    function mostrarError($msg)
    {
        $this->smarty->assign('msg', $msg);

        $this->smarty->display('templates/error.tpl');
    }

    function mostrarFormEdit($id_prenda)
    {   
        $this->smarty->display('templates/formEdit.tpl');
    }
}
