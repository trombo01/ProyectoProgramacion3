<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Empleado_model','',true);
        $this->load->model('producto_model');
    }
    
    public function index()
    {
       
        
     if($this->session->userdata('login')){
       $datos=array(
           'articulos'=>$this->producto_model->consultarArticulo(),
       );
        $this->load->view('Plantilla/encabezado');
        $this->load->view('tienda.php',$datos);
        $this->load->view('Plantilla/pie');
        
     }  else{
        $this->load->view('formulario/login');
     } 
    }
    //Ingresar y salir cuenta
    public function IngresarCuenta(){
        $usuario = $this->input->post('Usuario');
        $Password = $this->input->post('contrasena');
        $resultado= $this->Empleado_model->login($usuario,sha1($Password));
        if(!$resultado){
            redirect(base_url());
        }else{
            $data = array(
                'id'=> $resultado->id_empleado,
                'Nombre' => $resultado->Nombre.' '.$resultado->Apellido,
                'login'=>TRUE,
            );
            $this->session->set_userdata($data);
            redirect(base_url());
        }
    }
    public function SalirCuenta(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function RegistrarEmpleado(){
        $datos=array(
            'Nombre'=> $this->input->post('Nombre'),
            'Apellido'=> $this->input->post('Apellido'),
            'Tel'=> $this->input->post('Tel'),
            'Direccion'=> $this->input->post('Direccion'),
            'CorreoElectronico'=> $this->input->post('email'),
            'clave'=> sha1($this->input->post('clave')),
            'fechaIngreso'=> date("Y-m-d H:i:s"),
        );    
        if($this->input->post('clave')==$this->input->post('confclave')){
            $resultado= $this->Empleado_model->Registrar($datos);
            if($resultado){
                
                $this->session->sess_destroy();
                echo '<script>alert("Bienvenido/a");
            window.location.href="main/index";
            </script>';
            }else{
            echo '<script>alert("Error");
            window.location.href= "Registrar/Empleado";
            </script>';
            }
        }else{
            echo '<script> alert("La claves son invalidas");
            window.location.href= "Registrar/Empleado";
            </script>';
        }
    }
   
}
/* End of file main.php */


?>