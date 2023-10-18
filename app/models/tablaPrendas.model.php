<?php

class TablaPrendasModel{

    private $db;

    function __construct()
    {
        // Abro la conexión
        $this->db = $this->getConnection();
    }

    // Hago mi función getConection private para que solo se acceda desde esta clase
    private function getConnection(){
        return new PDO('mysql:host=localhost;dbname=db_tiendaropa;charset=utf8', 'root', '');
    }

    /**
     * Obtiene y devuelve todos los datos de la base de datos.
     * Cambiamos el nombre de todas las funciones para familiarizarnos
     * con nomenclatura de framework. 
     * antes: verTabla, insertarTabla, borrarTabla, actualizarTabla
     */
    function ver(){

        // Envío la consulta y después la ejecuto
        $query = $this->db->prepare('SELECT * FROM tablaprendas');
        $query->execute();
        
        // Obtengo la respuesta con un fetchAll
        $tabla = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de tareas

        return $tabla;
    }

    /**
     * Inserta la prenda en la base de datos
     */
    function insertar($prenda, $tipo, $costo, $rebaja){

        // Envío la consulta y después la ejecuto
        $query = $this->db->prepare('INSERT INTO tablaprendas (prenda, tipo, costo, rebaja) VALUES(?,?,?,?)'); //bindeo injeccion sql 
        $query->execute([$prenda, $tipo, $costo, $rebaja]);

        return $this->db->lastInsertId();
    }

    function eliminar($id_prenda){
        //Primero elimino todas las filas de la tabla detalles para poder eliminar
        //las de mi tabla prendas. Si no genera error. 
        $queryEliminarDetalles = $this->db->prepare('DELETE FROM detallesprenda WHERE id_prenda = ?');
        $queryEliminarDetalles->execute([$id_prenda]);

        $query = $this->db->prepare('DELETE FROM tablaprendas WHERE id_prenda = ?' );
        $query->execute([$id_prenda]);
    
    }

    function actualizar($id_prenda, $costoEdit, $rebajaEdit){
        
        $query = $this->db->prepare('UPDATE tablaprendas SET costo = ?, rebaja = ? WHERE tablaprendas.id_prenda = ?');
        $query->execute([$costoEdit,$rebajaEdit,$id_prenda]);
        
    }
}