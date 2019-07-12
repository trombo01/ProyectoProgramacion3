<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class producto extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
        $this->load->model('producto_model','',TRUE);
        
    }
    
    public function index()
    {
        $this->load->view('plantilla/encabezado');
        $this->load->view('registrarArticulo');
        $this->load->view('plantilla/pie');
        
    }
    public function SubirArticulo(){
        
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2048';
        $config['max_width']  = '2024';
        $config['max_height']  = '2004';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('imagen')){
            $data['error'] = array('error' => $this->upload->display_errors());
            $this->load->view('plantilla/encabezado');
            $this->load->view('registrarArticulo', $data);
            $this->load->view('plantilla/pie');
        }
        else{
            $file_info=$this->upload->data();
            $datos= array(
                'NOMBRE'=>$this->input->post('nombre'),
                'COSTO'=>$this->input->post('costo'),
                'PRECIO'=>$this->input->post('precio'),
                'EXISTENCIA'=>$this->input->post('cantidad'),
                'DESCRIPCION'=>$this->input->post('descripcion'),
                'Categoria'=>$this->input->post('categoria'),
                'rutaimagen'=>$file_info['file_name']
            );
            $this->producto_model->GuardarProducto($datos);
            
            redirect('main');
            
        }
    }
    public function AgregarExistencia(){
        $stock=$this->input->post('stock');
        $id=$this->input->post('id_articulo');
         $this->producto_model->ActualizarStock($stock,$id);
         redirect('main');
         
    }

}

/* End of file producto.php */


?>