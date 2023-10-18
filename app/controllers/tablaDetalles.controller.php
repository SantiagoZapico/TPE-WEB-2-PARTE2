<?php
include_once 'app/views/tablaDetalles.view.php';
include_once 'app/models/tablaDetalles.model.php';
include_once 'app/helpers/auth.helper.php';

class TablaDetallesController{
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new TablaDetallesModel();
        $this->view = new TablaDetallesView();
        $this->authHelper = new AuthHelper();

        //verifico que el user esté logueado siempre
        $this->authHelper->checkLogged(); 
    }

    //MOSTRAR TABLA DETALLES DE LAS PRENDAS
    function mostrarTabla2()
    {
        // obtengo mi tabla
        $tabla2 = $this->model->verTabla2();
        $this->view->mostrarTablaDetalles($tabla2);
    }

    function mostrarDetalles($id){
        $detalle = $this->model->verDetalles($id);
        $this->view->mostrarDetalles($detalle);
    }

    function agregar(){
        //Validar que los datos no estén vacíos al agregarlos a la tabla con un isset
        if (isset($_POST['talle'])) {
            //obtengo los datos del usuario
            $talle = $_POST['talle'];
        }
        if (isset($_POST['stock'])) {
            $stock = $_POST['stock'];
        }
        if (isset($_POST['categoria'])) {
            $categoria = $_POST['categoria'];
        }
        if (isset($_POST['id_prenda'])) {
            $id_prenda = $_POST['id_prenda'];
        }

        //inserto los datos en la DB
        $id_prenda = $this->model->insertar($talle, $stock, $categoria, $id_prenda);
        if ($id_prenda) {
            //redirijo al usuario a la pantalla principal
            header('Location: ' . BASE_URL);
        } else {
            $this->view->mostrarError('No se pudo insertar la prenda');
            die();
        }
    }

    function borrar($id_tipoPrenda)
    {
        $this->model->eliminar($id_tipoPrenda);
        header('Location: ' . BASE_URL);
    }

    function editarDetallesPrenda($id_tipoPrenda)
    {
        if (isset($_POST['submit'])) {
            // Procesar los valores del formulario una vez que se envíe

            // Obtener los valores del formulario
            $talleEdit = $_POST['talleEdit'];
            $stockEdit = $_POST['stockEdit'];

            // Realizar la actualización en la base de datos o cualquier otra acción que necesites

            $this->model->actualizarEdit($id_tipoPrenda, $talleEdit, $stockEdit);
            header('Location: ' . BASE_URL);
            // Redirigir o mostrar un mensaje de éxito
        } else {
            $this->view->mostrarFormEditDetalles($id_tipoPrenda);
        }
    }
}

