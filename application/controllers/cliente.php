<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cliente_model');
        
    }
    
    public function index()
    {    
    }
    public function view(){
        $datos->array(
            "Clientes"=>$this->cliente_model->getCliente();
        );
        $this->load->view('vista/view');
        
    }
        public function registrar(){
            $config['upload_path'] = './uploads/fotocliente';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '2048';
            $config['max_width']  = '2024';
            $config['max_height']  = '2004';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('imagenescliente')){
                $data['error'] = array('error' => $this->upload->display_errors());
                $this->load->view('plantilla/encabezado');
                $this->load->view('registrarArticulo', $data);
                $this->load->view('plantilla/pie');
            }
            else{
                $file_info=$this->upload->data();
                $datos= array(
                    'Cedula'=>$this->input->post('cedula'),
                    'Nombre'=>$this->input->post('nombre'),
                    'Apellido'=>$this->input->post('apellido'),
                    'Tel'=>$this->input->post('tel'),
                    'Correo'=>$this->input->post('email'),
                    'rutaimagen'=>$file_info['file_name']
                );
                $this->cliente_model->registrarCliente($datos);
                
                redirect('main');
                
            }
}

/* End of file cliente.php */


?>