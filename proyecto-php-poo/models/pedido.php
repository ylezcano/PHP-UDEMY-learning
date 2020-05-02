<?php

class Pedido{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    //conexión base de datos
    public function __construct(){
        $this->db = Database::connect();
    }

    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUsuario_id(){
        return $this->usuario_id;
    }

    public function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function getProvincia(){
        return $this->provincia;
    }

    public function setProvincia($provincia){
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    public function getLocalidad(){
        return $this->localidad;
    }

    public function setLocalidad($localidad){
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function getCoste(){
        return $this->coste;
    }

    public function setCoste($coste){
        $this->coste = $coste;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    //END Gueters and Seters

    public function getAll(){
        $sql = "SELECT * FROM pedidos ORDER BY id DESC;";
        $productos = $this->db->query($sql);
        return $productos;
    }


    public function getOne(){
        $sql = "SELECT * FROM pedidos WHERE id = {$this->getId()}";
        $producto = $this->db->query($sql);
        return $producto->fetch_object();
    }

    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuario_id()},'{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);

        // echo $sql;
        // echo "<br>";
        // echo $this->db->error;
        // die();

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    
    public function save_linea(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        foreach ($_SESSION['carrito'] as $elemento){
            $producto  = $elemento['producto'];

            $insert = "INSERT INTO lineas_pedidos VALUES (NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            $save = $this->db->query($insert);

            // var_dump($producto);
            // var_dump($insert);
            // echo $this->db->error;
            // die();

        // var_dump($pedido_id);
        }
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }



}