<?php

class Model_Citas{
    private $db;
    function __construct($ddbb){
        $this->db = $ddbb;
    }
    public function get($id){
        $qry = "SELECT * FROM `citas`   WHERE id = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function getsByUser($id){
        $qry = "SELECT * FROM `citas`  WHERE id_user = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function gets(){
        $qry = "SELECT * FROM `citas` ";
        $data  = $this->db->consult($qry, []);
        return $data;
    }

    public function create($fecha, $mensaje, $id_registro, $creacioncita, $estado, $id_propiedad, $id_visitante, $nombrevisita){
        $qry = "INSERT INTO `citas` (`fecha`,`mensaje`,`id_registro`,`creacioncita`,`estado`,`id_propiedad`,`id_visitante`,`nombrevisita`)
                VALUES (?,?,?,?,?,?,?,?)";
        $data  = $this->db->consult($qry, [$fecha, $mensaje, $id_registro, $creacioncita, $estado, $id_propiedad, $id_visitante, $nombrevisita]);
        return $data;
    }
    public function update($fecha, $mensaje, $id_registro, $creacioncita, $estado, $id_propiedad, $id_visitante, $nombrevisita, $id){
        $qry = "UPDATE `citas` SET  `fecha` = ?, `mensaje` = ?, `id_registro` = ?, `creacioncita` = ?, `estado` = ?, `id_propiedad` = ?, `id_visitante` = ?, `nombrevisita` = ?   WHERE id = ?";
        $data  = $this->db->consult($qry, [$fecha, $mensaje, $id_registro, $creacioncita, $estado, $id_propiedad, $id_visitante, $nombrevisita, $id]);
        return $data;
    }
    public function delete($id){
        $qry = "DELETE FROM `citas` WHERE id = ?";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }

}

?>