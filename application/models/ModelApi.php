<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelApi extends CI_Model {
    
    public function guardar($dato){
        return $this->db->insert("datos", $dato);
    }

    public function token_exists($token){
        $this->db->select("*");
        $this->db->from("datos");
        $this->db->where("token", $token);
        $results=$this->db->get();
        return empty($results->result());
    }
    
}