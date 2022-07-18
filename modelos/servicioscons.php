<?php

class Model_Servicioscons{
    private $db;
    function __construct($ddbb){
        $this->db = $ddbb;
    }
    public function get($id){
        $qry = "SELECT * FROM `servicioscons`   WHERE id = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function getsByUser($id){
        $qry = "SELECT * FROM `servicioscons`  WHERE id_user = ? ";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }
    public function gets(){
        $qry = "SELECT * FROM `servicioscons` ";
        $data  = $this->db->consult($qry, []);
        return $data;
    }

    public function create($nombreserv, $foto, $descripcion){
        $qry = "INSERT INTO `servicioscons` (`nombreserv`,`foto`,`descripcion`)
                VALUES (?,?,?)";
        $data  = $this->db->consult($qry, [$nombreserv, $foto, $descripcion]);
        return $data;
    }
    public function update($nombreserv, $foto, $descripcion, $id){
        $qry = "UPDATE `servicioscons` SET  `nombreserv` = ?, `foto` = ?, `descripcion` = ?   WHERE id = ?";
        $data  = $this->db->consult($qry, [$nombreserv, $foto, $descripcion, $id]);
        return $data;
    }
    public function delete($id){
        $qry = "DELETE FROM `servicioscons` WHERE id = ?";
        $data  = $this->db->consult($qry, [$id]);
        return $data;
    }

}

?>