<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cliente_model extends CI_Model {

    public function getCliente(){
        $resultado=$this->db->get('tb_cliente')->result();
        
        return $resultado;
    }
    public function registrarCliente($datos){
        $this->db->insert('tb_cliente', $datos);
    }

}

/* End of file cliente_model.php */


?>