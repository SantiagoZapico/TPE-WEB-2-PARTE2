<?php
include_once 'app/models/tablaPrendas.model.php';
include_once 'app/views/tablaPrendas.view.php';
include_once 'app/helpers/auth.helper.php';

class TablaPrendasController
{
    private $model;
    private $view;
    private $authHelper;
    function __construct()
    {
        $this->model = new TablaPrendasModel();
        //$this->model = new TablaDetallesPrendaModel();
        $this->view = new TablaPrendasView();
        $this->authHelper = new AuthHelper();

        //verifico que el user esté logueado siempre
        $this->authHelper->checkLogged(); 
    }

    //MOSTRAR TABLA PRENDAS
    function mostrarTabla()
    {   
        // obtengo mi tabla de prendas del modelo
        $tabla = $this->model->ver();

        // actualizo la vista
        $this->view->mostrarTablaPrendas($tabla);
    }

    function agregarPrenda()
    {

        //Validar que los datos no estén vacíos al agregarlos a la tabla con un isset
        if (isset($_POST['prenda'])) {
            //obtengo los datos del usuario
            $prenda = $_POST['prenda'];
        }
        if (isset($_POST['tipo'])) {
            $tipo = $_POST['tipo'];
        }
        if (isset($_POST['rebaja'])) {
            $rebaja = $_POST['rebaja'];
        }
        if (isset($_POST['costo'])) {
            $costo = $_POST['costo'];
        }

        //inserto los datos en la DB

        $id_prenda = $this->model->insertar($prenda, $tipo, $costo, $rebaja);
        if ($id_prenda) {
            //redirijo al usuario a la pantalla principal
            header('Location: ' . BASE_URL);
        } else {
            $this->view->mostrarError('No se pudo insertar la prenda');
            die();
        }
    }

    function borrarPrenda($id_prenda)
    {
        $this->model->eliminar($id_prenda);
        header('Location: ' . BASE_URL);
    }

    function editarPrenda($id_prenda)
    {
        if (isset($_POST['submit'])) {
            // Procesar los valores del formulario una vez que se envíe

            // Obtener los valores del formulario
            $costoEdit = $_POST['costoEdit'];
            $rebajaEdit = $_POST['rebajaEdit'];

            // Realizar la actualización en la base de datos o cualquier otra acción que necesites

            $this->model->actualizar($id_prenda, $costoEdit, $rebajaEdit);
            header('Location: ' . BASE_URL);
            // Redirigir o mostrar un mensaje de éxito
        } else {
            $this->view->mostrarFormEdit($id_prenda);
        }
    }


}
