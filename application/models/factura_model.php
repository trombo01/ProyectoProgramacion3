<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class factura_model extends CI_Model {

   public function ultimoregistro(){
    $this->db->select('id_factura');
    $this->db->limit(1);
    $this->db->order_by('id_factura', 'desc');
      $resultado= $this->db->get('tb_factura');
      if($resultado->num_rows()>0){
        return $resultado->row();
    }else{
        return 0;
    }
   }
   //
   public function guardarFactura($datos){
   return $this->db->insert('tb_factura',datos);
    
   }
   public function guardarDetalleFactura($datos){
       $this->db->insert('tb_detalle_factura', $datos);
       
   }
   //
   public function getfactura($idfactura){
    $this->db->select('f.*,c.Nombre,c.Apellido,c.Tel,c.Correo');
    $this->db->from('tb_factura f');
    $this->db->join('tb_cliente c', 'c.id_cliente = f.id_cliente');
    $this->db->where('f.id_factura', $idfactura);
    
    $resultado = $this->db->get();
    return $resultado->row();
   }
   //
   public function getdetalle($idfactura){
    $this->db->select('d.*,p.NOMBRE,p.COSTO');
    $this->db->from('tb_detalle_factura d');
    $this->db->join('tb_articulos p', 'p.id_articulo = d.id_producto');
    $this->db->where('d.id_factura', $idfactura);
    $resultado = $this->db->get();
    return $resultado->result();
   }
}

/* End of file factura_model.php */


?>