<?php
require_once 'libs/libs/Smarty.class.php';

class TablaDetallesView{

    function mostrarTablaDetalles($tabla2)
    {
        $smarty = new Smarty();

        $smarty->assign('tabla2', $tabla2);
        $smarty->display('templates/tablaDetalles.tpl');
    }

    //FUNCION PARA MOSTRAR ERROR
    function mostrarError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign('msg', $msg);

        $smarty->display('templates/error.tpl');
    }

    function mostrarFormEditDetalles($id_tipoPrenda)
    {   
        $smarty = new Smarty();

        $smarty->display('templates/formEditDetalles.tpl');
    }

    function mostrarDetalles($detalle){
        $smarty = new Smarty();
        $smarty->assign('detalle', $detalle);
        $smarty->display('templates/verDetalles.tpl');
    }

}

?>