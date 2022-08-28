<?php

class Model_Propiedad{
    private $db;
    function __construct($ddbb){
        $this->db = $ddbb;
    }
    public function get($id){
        $qry = "SELECT * FROM `propiedad`   WHERE id = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function getsByUser($id){
        $qry = "SELECT * FROM `propiedad`  WHERE id_user = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function gets(){
        $qry = "SELECT * FROM `propiedad` ";
        $data  = $this->db->consult($qry, []);
        return $data;
    }

    public function getsFilter($direccion){
        $qry = "SELECT * FROM `propiedad` WHERE
                propiedad.direccion LIKE ?
                ";
        $data  = $this->db->consult($qry, ["%$direccion%"]);
        return $data;
    }

    public function create($direccion, $imagenes, $id_usuario, $categoria, $descripcion){
        $qry = "INSERT INTO `propiedad` (`direccion`,`imagenes`,`id_usuario`,`categoria`,`descripcion`)
                VALUES (?,?,?,?,?)";
        $data  = $this->db->consult($qry, [$direccion, $imagenes, $id_usuario, $categoria, $descripcion]);
        return $data;
    }
    public function update($direccion, $imagenes, $id_usuario, $categoria, $descripcion, $id){
        $qry = "UPDATE `propiedad` SET  `direccion` = ?, `imagenes` = ?, `id_usuario` = ?, `categoria` = ?, `descripcion` = ?   WHERE id = ?";
        $data  = $this->db->consult($qry, [$direccion, $imagenes, $id_usuario, $categoria, $descripcion, $id]);
        return $data;
    }
    public function delete($id){
        $qry = "DELETE FROM `propiedad` WHERE id = ?";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }

}

?>
