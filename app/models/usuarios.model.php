<?php

class UserModel {
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
     * Nos devuelve un usuario dado un email
     */
    public function validarEmail($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?'); 
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}