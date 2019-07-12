<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class producto_model extends CI_model {

    public function consultarArticulo(){
        $resultado= $this->db->get('tb_articulos')->result();
        return $resultado;
    }
    public function listproducto($valor){
        $this->db->select('id_articulo,NOMBRE AS label,PRECIO,EXISTENCIA');
        $this->db->from('tb_articulos');
        $this->db->like('NOMBRE',$valor);
        $resultado= $this->db->get();
        return $resultado->result_array();
        
    }
    public function GuardarProducto($datos){
        $this->db->insert('tb_articulos', $datos);
        
    }
    public function ActualizarStock($stock,$id){
        $this->db->set('EXISTENCIA', $stock);
        $this->db->where('id_articulo', $id);
        $this->db->update('tb_articulos');
        $resultado=$this->db->affected_rows();
        return $resultado;
    }
}

/* End of file producto_modal.php */


?>