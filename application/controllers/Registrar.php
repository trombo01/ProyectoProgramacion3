<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

    public function index()
    {
        $this->load->view('plantilla/encabezado.php');
        $this->load->view('registrarArticulo.php' );
        $this->load->view('plantilla/pie');
    
    }
    public function Cliente(){
        $this->load->view('plantilla/encabezado.php');
        $this->load->view('cliente/RegistrarCliente.php' );
        $this->load->view('plantilla/pie.php');
       }
       public function Empleado(){
        $this->load->view('formulario/RegistrarEmpleado.php' );
       }

}

/* End of file Registrar.php */


?>