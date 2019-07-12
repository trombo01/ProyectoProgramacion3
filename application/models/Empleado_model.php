<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model extends CI_Model {

    public function login($usuario,$password){
        $this->db->where('CorreoElectronico', $usuario);
        $this->db->where('clave', $password);
        $resultado = $this->db->get('tb_empleado');
        if($resultado->num_rows()>0){
            return $resultado->row();
        }else{
            return false;
        }
    }
    public function Registrar($datos){
        $this->db->insert('tb_empleado', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }

}

/* End of file Empleado_model.php */

?>